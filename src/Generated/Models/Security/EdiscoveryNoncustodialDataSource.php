<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryNoncustodialDataSource extends DataSourceContainer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DataSource|null $dataSource User source or SharePoint site data source as non-custodial data source.
    */
    private ?DataSource $dataSource = null;
    
    /**
     * @var EdiscoveryIndexOperation|null $lastIndexOperation Operation entity that represents the latest indexing for the non-custodial data source.
    */
    private ?EdiscoveryIndexOperation $lastIndexOperation = null;
    
    /**
     * Instantiates a new ediscoveryNoncustodialDataSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryNoncustodialDataSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryNoncustodialDataSource {
        return new EdiscoveryNoncustodialDataSource();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'dataSource' => function (ParseNode $n) use ($o) { $o->setDataSource($n->getObjectValue(array(DataSource::class, 'createFromDiscriminatorValue'))); },
            'lastIndexOperation' => function (ParseNode $n) use ($o) { $o->setLastIndexOperation($n->getObjectValue(array(EdiscoveryIndexOperation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastIndexOperation property value. Operation entity that represents the latest indexing for the non-custodial data source.
     * @return EdiscoveryIndexOperation|null
    */
    public function getLastIndexOperation(): ?EdiscoveryIndexOperation {
        return $this->lastIndexOperation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('dataSource', $this->dataSource);
        $writer->writeObjectValue('lastIndexOperation', $this->lastIndexOperation);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the dataSource property value. User source or SharePoint site data source as non-custodial data source.
     *  @param DataSource|null $value Value to set for the dataSource property.
    */
    public function setDataSource(?DataSource $value ): void {
        $this->dataSource = $value;
    }

    /**
     * Sets the lastIndexOperation property value. Operation entity that represents the latest indexing for the non-custodial data source.
     *  @param EdiscoveryIndexOperation|null $value Value to set for the lastIndexOperation property.
    */
    public function setLastIndexOperation(?EdiscoveryIndexOperation $value ): void {
        $this->lastIndexOperation = $value;
    }

}
