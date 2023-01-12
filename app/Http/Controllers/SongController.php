<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SongRepositoryInterface;

class SongController extends Controller
{
    protected $songRepo;
    public function __construct(SongRepositoryInterface $songRepo)
    {
        parent::__construct();
        $this->songRepo = $songRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->response['data'] = $this->songRepo->store($request);
        return response()->json($this->response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->response['data'] = $this->songRepo->show($id);
        return response()->json($this->response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->songRepo->destroy($id);
        $this->response['data'] = "Xóa bài hát thành công";
        return response()->json($this->response);
    }
    /**
     * Search song
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $this->response['data'] = $this->songRepo->search($request);
        return response()->json($this->response);
    }
}
