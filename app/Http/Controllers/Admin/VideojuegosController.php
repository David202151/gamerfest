<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Videojuego\BulkDestroyVideojuego;
use App\Http\Requests\Admin\Videojuego\DestroyVideojuego;
use App\Http\Requests\Admin\Videojuego\IndexVideojuego;
use App\Http\Requests\Admin\Videojuego\StoreVideojuego;
use App\Http\Requests\Admin\Videojuego\UpdateVideojuego;
use App\Models\Videojuego;
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

class VideojuegosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexVideojuego $request
     * @return array|Factory|View
     */
    public function index(IndexVideojuego $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Videojuego::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'compania', 'precio', 'descripcion'],

            // set columns to searchIn
            ['id', 'nombre', 'compania', 'descripcion']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.videojuego.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.videojuego.create');

        return view('admin.videojuego.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreVideojuego $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreVideojuego $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Videojuego
        $videojuego = Videojuego::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/videojuegos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/videojuegos');
    }

    /**
     * Display the specified resource.
     *
     * @param Videojuego $videojuego
     * @throws AuthorizationException
     * @return void
     */
    public function show(Videojuego $videojuego)
    {
        $this->authorize('admin.videojuego.show', $videojuego);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Videojuego $videojuego
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Videojuego $videojuego)
    {
        $this->authorize('admin.videojuego.edit', $videojuego);


        return view('admin.videojuego.edit', [
            'videojuego' => $videojuego,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateVideojuego $request
     * @param Videojuego $videojuego
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateVideojuego $request, Videojuego $videojuego)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Videojuego
        $videojuego->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/videojuegos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/videojuegos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyVideojuego $request
     * @param Videojuego $videojuego
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyVideojuego $request, Videojuego $videojuego)
    {
        $videojuego->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyVideojuego $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyVideojuego $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Videojuego::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
