<?php

class Api_Records extends Api
{
    public function __construct()
    {
        // In here you could initialize some shared logic between this API and rest of the project
    }

    /**
     * Get individual record or records list
     */
    public function get($id = null)
    {
        if ($id) {
            return $this->getRecord(intval($id));
        } else {
            return $this->getRecords();
        }
    }

    private function getRecord($record_id)
    {
        // In real world there would be call to model with validation and probably token checking
        $record = array('title'=>'Foo', 'content'=>'Bar', 'tags'=>array('abc', 'xyz'));
        return Api::responseOk($this->format($record));
    }

    private function getRecords()
    {
        // In real world there would be call to model with validation and probably token checking
        $records = array(
            array('title'=>'Foo1', 'content'=>'Bar1', 'tags'=>array('abc', 'xyz')),
            array('title'=>'Foo2', 'content'=>'Bar2', 'tags'=>array('abc')),
            array('title'=>'Foo3', 'content'=>'Bar3', 'tags'=>array('xyz')),
        );

        $current_page = 1;
        $items_on_page = 10;
        $total_pages = 4;
        $items_count = 37;

        $records_return = array();
        foreach ($records as $record) {
            $records_return[]= $this->format($record);
        }

        $_metadata = array(
            'total_pages' => $total_pages,
            'per_page' => $items_on_page,
            'current_page' => $current_page,
            'total_count' => $items_count,
        );

        return Api::responseOk($records_return, $_metadata);
    }

    /**
     * Method to format item output, return only whitelisted fields
     */
    private function format($record)
    {
        $return = array(
            'title' => null,
            'content' => null,
        );

        $return['title'] = $record['title'];
        $return['content'] = $record['content'];

        return $return;
    }

    /**
     * Update record
     */
    public function put($record_id = null)
    {
        // In real world there would be call to model with validation and probably token checking

        // Use Api::$input_data to update
        return Api::responseOk('OK', array());
    }

    /**
     * Create record
     */
    public function post()
    {
        // In real world there would be call to model with validation and probably token checking

        $info = array('record'=>array('id'=>7));

        return Api::responseOk($info);
    }

    /**
     * Delete record
     */
    public function delete( $id = null )
    {
        // In real world there would be call to model with validation and probably token checking

        return Api::responseOk('OK', array());
    }
}
