<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YanhjTest\V20200202\Models;

use AlibabaCloud\Tea\Model;

class GetProductByNameRequest extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description market
     *
     * @var int
     */
    public $market;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description bucUid
     *
     * @var int
     */
    public $empId;
    protected $_name = [
        'requestId' => 'RequestId',
        'market'    => 'Market',
        'name'      => 'Name',
        'empId'     => 'EmpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->market) {
            $res['Market'] = $this->market;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->empId) {
            $res['EmpId'] = $this->empId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Market'])) {
            $model->market = $map['Market'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EmpId'])) {
            $model->empId = $map['EmpId'];
        }

        return $model;
    }
}
