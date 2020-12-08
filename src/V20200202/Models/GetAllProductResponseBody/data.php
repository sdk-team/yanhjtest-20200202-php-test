<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YanhjTest\V20200202\Models\GetAllProductResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description 域名
     *
     * @var string[]
     */
    public $domains;

    /**
     * @description nameSpace
     *
     * @var string
     */
    public $nameSpace;

    /**
     * @description product
     *
     * @var string
     */
    public $product;

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'domains'     => 'Domains',
        'nameSpace'   => 'NameSpace',
        'product'     => 'Product',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
