<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Horario\BulkDestroyHorario;
use App\Http\Requests\Admin\Horario\DestroyHorario;
use App\Http\Requests\Admin\Horario\IndexHorario;
use App\Http\Requests\Admin\Horario\StoreHorario;
use App\Http\Requests\Admin\Horario\UpdateHorario;
use App\Models\Horario;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HorariosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexHorario $request
     * @return array|Factory|View
     */
    public function index(IndexHorario $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Horario::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'hora_inicio', 'hora_fin', 'fecha', 'observaciones'],

            // set columns to searchIn
            ['id', 'hora_inicio', 'hora_fin', 'observaciones']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.horario.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.horario.create');

        return view('admin.horario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHorario $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreHorario $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Horario
        $horario = Horario::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/horarios'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/horarios');
    }

    /**
     * Display the specified resource.
     *
     * @param Horario $horario
     * @throws AuthorizationException
     * @return void
     */
    public function show(Horario $horario)
    {
        $this->authorize('admin.horario.show', $horario);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Horario $horario
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Horario $horario)
    {
        $this->authorize('admin.horario.edit', $horario);


        return view('admin.horario.edit', [
            'horario' => $horario,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateHorario $request
     * @param Horario $horario
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateHorario $request, Horario $horario)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Horario
        $horario->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/horarios'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/horarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyHorario $request
     * @param Horario $horario
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyHorario $request, Horario $horario)
    {
        $horario->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyHorario $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyHorario $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Horario::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
