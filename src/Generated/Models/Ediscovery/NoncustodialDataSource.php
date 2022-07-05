<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NoncustodialDataSource extends DataSourceContainer implements Parsable 
{
    /**
     * @var bool|null $applyHoldToSource Indicates if hold is applied to non-custodial data source (such as mailbox or site).
    */
    private ?bool $applyHoldToSource = null;
    
    /**
     * @var DataSource|null $dataSource User source or SharePoint site data source as non-custodial data source.
    */
    private ?DataSource $dataSource = null;
    
    /**
     * Instantiates a new noncustodialDataSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the applyHoldToSource property value. Indicates if hold is applied to non-custodial data source (such as mailbox or site).
     * @return bool|null
    */
    public function getApplyHoldToSource(): ?bool {
        return $this->applyHoldToSource;
    }

    /**
     * Gets the dataSource property value. User source or SharePoint site data source as non-custodial data source.
     * @return DataSource|null
    */
    public function getDataSource(): ?DataSource {
        return $this->dataSource;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applyHoldToSource' => function (ParseNode $n) use ($o) { $o->setApplyHoldToSource($n->getBooleanValue()); },
            'dataSource' => function (ParseNode $n) use ($o) { $o->setDataSource($n->getObjectValue(array(DataSource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('applyHoldToSource', $this->applyHoldToSource);
        $writer->writeObjectValue('dataSource', $this->dataSource);
    }

    /**
     * Sets the applyHoldToSource property value. Indicates if hold is applied to non-custodial data source (such as mailbox or site).
     *  @param bool|null $value Value to set for the applyHoldToSource property.
    */
    public function setApplyHoldToSource(?bool $value ): void {
        $this->applyHoldToSource = $value;
    }

    /**
     * Sets the dataSource property value. User source or SharePoint site data source as non-custodial data source.
     *  @param DataSource|null $value Value to set for the dataSource property.
    */
    public function setDataSource(?DataSource $value ): void {
        $this->dataSource = $value;
    }

}
