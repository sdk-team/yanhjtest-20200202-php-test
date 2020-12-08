<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YanhjTest\V20200202\Models\GetProductByNameResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description 版本
     *
     * @var string[]
     */
    public $versions;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description domain
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'title'    => 'Title',
        'versions' => 'Versions',
        'name'     => 'Name',
        'domain'   => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = $map['Versions'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
