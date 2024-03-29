<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SongRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SongCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SongCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Song::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/song');
        CRUD::setEntityNameStrings('chanson', 'chansons');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */

        CRUD::column([
            'name' => 'title',
            'label' => 'Titre de la chanson',
            'type' => 'text',
        ]);

        CRUD::column([
            'name' => 'year_id',
            'label' => 'Saison',
            'type' => 'checklist',
        ]);

        CRUD::column([
            'name' => 'updated_at',
            'label' => 'Dernière modification',
            'type' => 'datetime',
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SongRequest::class);
        //CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */

        CRUD::field('title')->type('text')->label('Titre de la chanson');

        CRUD::field('author')->type('text')->label('Auteur');

        CRUD::field('lyrics')->type('summernote')->label('Paroles');

        CRUD::field([  // Select
            'label'     => "Saison",
            'type'      => 'select',
            'name'      => 'year_id', // the db column for the foreign key
            
            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'year',
            
            // optional - manually specify the related model and attribute
            'model'     => "App\Models\Year", // related model
            'attribute' => 'name', // foreign key attribute that is shown to user
            
            // optional - force the related options to be a custom query, instead of all();
            'options'   => (function ($query) {
                    return $query->orderBy('name', 'DESC')->get();
            }), //  you can use this to filter the results show in the select
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
