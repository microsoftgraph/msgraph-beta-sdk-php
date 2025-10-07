<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Ediscovery;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NoncustodialDataSource extends DataSourceContainer implements Parsable 
{
    /**
     * Instantiates a new NoncustodialDataSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ediscovery.noncustodialDataSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NoncustodialDataSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NoncustodialDataSource {
        return new NoncustodialDataSource();
    }

    /**
     * Gets the applyHoldToSource property value. Indicates if hold is applied to noncustodial data source (such as mailbox or site).
     * @return bool|null
    */
    public function getApplyHoldToSource(): ?bool {
        $val = $this->getBackingStore()->get('applyHoldToSource');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyHoldToSource'");
    }

    /**
     * Gets the dataSource property value. User source or SharePoint site data source as noncustodial data source.
     * @return DataSource|null
    */
    public function getDataSource(): ?DataSource {
        $val = $this->getBackingStore()->get('dataSource');
        if (is_null($val) || $val instanceof DataSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applyHoldToSource' => fn(ParseNode $n) => $o->setApplyHoldToSource($n->getBooleanValue()),
            'dataSource' => fn(ParseNode $n) => $o->setDataSource($n->getObjectValue([DataSource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('applyHoldToSource', $this->getApplyHoldToSource());
        $writer->writeObjectValue('dataSource', $this->getDataSource());
    }

    /**
     * Sets the applyHoldToSource property value. Indicates if hold is applied to noncustodial data source (such as mailbox or site).
     * @param bool|null $value Value to set for the applyHoldToSource property.
    */
    public function setApplyHoldToSource(?bool $value): void {
        $this->getBackingStore()->set('applyHoldToSource', $value);
    }

    /**
     * Sets the dataSource property value. User source or SharePoint site data source as noncustodial data source.
     * @param DataSource|null $value Value to set for the dataSource property.
    */
    public function setDataSource(?DataSource $value): void {
        $this->getBackingStore()->set('dataSource', $value);
    }

}
