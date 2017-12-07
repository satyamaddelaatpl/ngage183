<?php
/*
 * Spring Signage Ltd - http://www.springsignage.com
 * Copyright (C) 2016 Spring Signage Ltd
 * (XiboDataSet.php)
 */


namespace Xibo\OAuth2\Client\Entity;


use Xibo\OAuth2\Client\Exception\XiboApiException;

class XiboDataSet extends XiboEntity
{

	private $url = '/dataset';

    public $dataSetId;
    public $dataSetColumnId;
    public $rowId;
    public $dataSet;
    public $description;
    public $userId;
    public $lastDataEdit;
    public $owner;
    public $groupsWithPermissions;
    public $code;
    public $isLookup;
    public $heading;
    public $listContent;
    public $columnOrder;
    public $dataTypeId;
    public $dataSetColumnTypeId;
    public $formula;
    public $dataType;
    public $dataSetColumnType;
    public $dataSetColumnId_ID;


	/**
     * @param array $params
     * @return array|XiboDataSet
     */
    public function get(array $params = [])
    {
        $entries = [];
        $response = $this->doGet($this->url, $params);

        foreach ($response as $item) {
            $entries[] = clone $this->hydrate($item);
        }

        return $entries;
    }

    /**
     * @param $id
     * @return XiboDataSet
     * @throws XiboApiException
     */
    public function getById($id)
    {
        $response = $this->doGet($this->url, [
            'dataSetId' => $id
        ]);

        if (count($response) <= 0)
            throw new XiboApiException('Expecting a single record, found ' . count($response));

        return clone $this->hydrate($response[0]);
    }

    /**
     * Create
     * @param $dataSetName
     * @param $dataSetDescription
     */
    public function create($name, $description)
    {
        $this->userId = $this->getEntityProvider()->getMe()->getId();
        $this->dataSet = $name;
        $this->description = $description;
        $response = $this->doPost('/dataset', $this->toArray());
        
        return $this->hydrate($response);
    }

    /**
     * Edit
     * @param $dataSetName
     * @param $dataSetDescription
     */
    public function edit($name, $description)
    {
        $this->dataSet = $dataSetName;
        $this->description = $dataSetDescription;
        $response = $this->doPut('/dataset/' . $this->dataSetId, $this->toArray());
        
        return $this->hydrate($response);
    }


    /**
     * Delete
     * @return bool
     */
    public function delete()
    {
        $this->doDelete('/dataset/' . $this->dataSetId);
        
        return true;
    }

    /**
     * Delete with data
     * @return bool
     */
    public function deleteWData()
    {
        $this->doDelete('/dataset/' . $this->dataSetId, [
            'deleteData' => 1
            ]);
        
        return true;
    }

    /**
     * Create Column
     * @param $heading
     * @param $listContent
     * @param $columnOrder
     * @param $dataTypeId
     * @param $dataSetColumnTypeId
     * @param $formula
     */
    public function createColumn($heading, $listContent, $columnOrder, $dataTypeId, $dataSetColumnTypeId, $formula)
    {
        $this->userId = $this->getEntityProvider()->getMe()->getId();
        $this->heading = $heading;
        $this->listContent = $listContent;
        $this->columnOrder = $columnOrder;
        $this->dataTypeId = $dataTypeId;
        $this->dataSetColumnTypeId = $dataSetColumnTypeId;
        $this->formula = $formula;
        $response = $this->doPost('/dataset/'. $this->dataSetId . '/column', $this->toArray());
        
        return $this->hydrate($response);
    }

    /**
     * @param $id
     * @return XiboDataSetColumn
     * @throws XiboApiException
     */
    public function getByColumnId($id)
    {
        return (new XiboDataSetColumn($this->getEntityProvider()))->getById($this->dataSetId, $id);
    }

    /**
     * Edit Column
     * @param $heading
     * @param $listContent
     * @param $columnOrder
     * @param $dataTypeId
     * @param $dataSetColumnTypeId
     * @param $formula
     */
    public function editColumn($heading, $listContent, $columnOrder, $dataTypeId, $dataSetColumnTypeId, $formula)
    {
        $this->userId = $this->getEntityProvider()->getMe()->getId();
        $this->heading = $heading;
        $this->listContent = $columnListContent;
        $this->columnOrder = $columnOrder;
        $this->dataTypeId = $dataTypeId;
        $this->dataSetColumnTypeId = $dataSetColumnTypeId;
        $this->formula = $formula;
        $response = $this->doPut('/dataset/'. $this->dataSetId . '/column/' . $this->dataSetColumnId, $this->toArray());
        
        return $this->hydrate($response);
    }

    /**
     * Delete Column
     * @return bool
     */
    public function deleteColumn()
    {
        $this->doDelete('/dataset/' . $this->dataSetId . '/column/' . $this->dataSetColumnId);
        
        return true;
    }

    /**
     * @param $id
     * @return XiboDataSet
     * @throws XiboApiException
     */
    public function getDataByRowId($id)
    {
        $response = $this->doGet('/dataset/data/'. $this->dataSetId, [
            'rowId' => $id
        ]);

        if (count($response) <= 0)
            throw new XiboApiException('Expecting a single record, found ' . count($response));

        return $response[0];
    }

    /**
     * Create Row
     * @param $rowData
     */
    public function createRow($columnId, $rowData)
    {
        $this->userId = $this->getEntityProvider()->getMe()->getId();
        $response = $this->doPost('/dataset/data/'. $this->dataSetId, [
            'dataSetColumnId_' . $columnId => $rowData
            ]);
        
        return $response;
    }

    /**
     * Edit Row
     * @param $rowData
     */
    public function editRow($columnId, $rowData)
    {
        $this->userId = $this->getEntityProvider()->getMe()->getId();
        $response = $this->doPut('/dataset/data/'. $this->dataSetId, [
            'dataSetColumnId_' . $columnId => $rowData
            ]);
        
        return $response;
    }

    /**
     * Delete Row
     * @return bool
     */
    public function deleteRow()
    {
        $this->doDelete('/dataset/data/' . $this->dataSetId . $this->rowId);
        
        return true;
    }

}
