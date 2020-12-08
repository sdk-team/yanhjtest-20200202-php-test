<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YanhjTest\V20200202\Models;

use AlibabaCloud\Tea\Model;

class GetAllProductRequest extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description pop产品
     *
     * @var string
     */
    public $product;

    /**
     * @description 环境
     *
     * @var string
     */
    public $env;
    protected $_name = [
        'requestId' => 'RequestId',
        'product'   => 'Product',
        'env'       => 'Env',
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
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAllProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        return $model;
    }
}
