<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class DeleteShrinkRequest extends Model
{
    /**
     * @example photoview
     *
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $filterShrink;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @example acs:rds:cn-hangzhou:1335786916******:rds-db-credent****\/zha***Test03-21****
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
        'filterShrink'  => 'Filter',
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
        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
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
     * @return DeleteShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
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
