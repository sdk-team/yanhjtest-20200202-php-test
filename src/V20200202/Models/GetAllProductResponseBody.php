<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YanhjTest\V20200202\Models;

use AlibabaCloud\SDK\YanhjTest\V20200202\Models\GetAllProductResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetAllProductResponseBody extends Model
{
    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description 产品信息
     *
     * @var data
     */
    public $data;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAllProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
