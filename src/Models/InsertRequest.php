<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class InsertRequest extends Model
{
    /**
     * @example photoview
     *
     * @var string
     */
    public $database;

    /**
     * @var mixed[]
     */
    public $record;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @example acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****
     *
     * @var string
     */
    public $secretArn;

    /**
     * @example users
     *
     * @var string
     */
    public $table;

    /**
     * @example 8609****-94e1-45ce-8e25-354e3dd8****
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'database'      => 'Database',
        'record'        => 'Record',
        'resourceArn'   => 'ResourceArn',
        'secretArn'     => 'SecretArn',
        'table'         => 'Table',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
