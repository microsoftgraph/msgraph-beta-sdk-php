<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchDataStores\Item\Lookup;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LookupRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $key  */
    private ?string $key = null;
    
    /** @var array<string>|null $resultColumnNames  */
    private ?array $resultColumnNames = null;
    
    /** @var array<string>|null $values  */
    private ?array $values = null;
    
    /**
     * Instantiates a new lookupRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LookupRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): LookupRequestBody {
        return new LookupRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'key' => function (self $o, ParseNode $n) { $o->setKey($n->getStringValue()); },
            'resultColumnNames' => function (self $o, ParseNode $n) { $o->setResultColumnNames($n->getCollectionOfPrimitiveValues()); },
            'values' => function (self $o, ParseNode $n) { $o->setValues($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the key property value. 
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the resultColumnNames property value. 
     * @return array<string>|null
    */
    public function getResultColumnNames(): ?array {
        return $this->resultColumnNames;
    }

    /**
     * Gets the values property value. 
     * @return array<string>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('key', $this->key);
        $writer->writeCollectionOfPrimitiveValues('resultColumnNames', $this->resultColumnNames);
        $writer->writeCollectionOfPrimitiveValues('values', $this->values);
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
     * Sets the key property value. 
     *  @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the resultColumnNames property value. 
     *  @param array<string>|null $value Value to set for the resultColumnNames property.
    */
    public function setResultColumnNames(?array $value ): void {
        $this->resultColumnNames = $value;
    }

    /**
     * Sets the values property value. 
     *  @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value ): void {
        $this->values = $value;
    }

}
