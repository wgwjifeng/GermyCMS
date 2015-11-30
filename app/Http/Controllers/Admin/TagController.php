<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use Illuminate\Http\Request;
use App\Model\Tag;
use Redirect, Input, Auth, Validator, View;

class TagController extends Controller {


    private $preView = 'admin.tag.';

    /**
     * Construct method
     */
    public function __construct() {
        $this->middleware('tag', ['only' => ['edit', 'destroy']]);
    }


    /**
     * Get Name of View
     *
     * @return ViewName
     */
    public function getView($name) {
        return $this->preView . $name;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return View::make($this->getView('index'))->withTags(Tag::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make($this->getView('create'))->withTags(Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     * @return Response
     */
    public function store(TagRequest $request) {
        if (Tag::create($request->all())) {
            return Redirect::to('admin/tag')->with('success', '添加成功！');
        } else {
            return Redirect::back()->withInput()->with('error', '添加失败！');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show(Tag $tag) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Tag $tag) {
        return View::make($this->getView('edit'))->with("thisTag", $tag)->withTags(Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(TagRequest $request, Tag $tag) {
        if ($tag->update($request->all())) {
            return Redirect::to('admin/tag')->with('success', '修改成功！');
        } else {
            return Redirect::back()->withInput()->with('error', '修改失败！');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Tag $tag) {
        if ($tag->delete()) {
            return Redirect::to('admin/tag')->with('success', '删除成功！');
        } else {
            return Redirect::to('admin/tag')->with('error', '删除失败！');
        }

    }

}
