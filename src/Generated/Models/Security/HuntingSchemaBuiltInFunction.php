<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HuntingSchemaBuiltInFunction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new HuntingSchemaBuiltInFunction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HuntingSchemaBuiltInFunction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HuntingSchemaBuiltInFunction {
        return new HuntingSchemaBuiltInFunction();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the documentation property value. Description of the function and its usage.
     * @return string|null
    */
    public function getDocumentation(): ?string {
        $val = $this->getBackingStore()->get('documentation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'documentation' => fn(ParseNode $n) => $o->setDocumentation($n->getStringValue()),
            'huntingFunctionId' => fn(ParseNode $n) => $o->setHuntingFunctionId($n->getIntegerValue()),
            'inputParameters' => fn(ParseNode $n) => $o->setInputParameters($n->getCollectionOfObjectValues([HuntingSchemaFunctionParameter::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outputColumns' => fn(ParseNode $n) => $o->setOutputColumns($n->getCollectionOfObjectValues([HuntingSchemaTableColumn::class, 'createFromDiscriminatorValue'])),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
        ];
    }

    /**
     * Gets the huntingFunctionId property value. Unique identifier for the function. Required.
     * @return int|null
    */
    public function getHuntingFunctionId(): ?int {
        $val = $this->getBackingStore()->get('huntingFunctionId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'huntingFunctionId'");
    }

    /**
     * Gets the inputParameters property value. Collection of input parameters accepted by the function.
     * @return array<HuntingSchemaFunctionParameter>|null
    */
    public function getInputParameters(): ?array {
        $val = $this->getBackingStore()->get('inputParameters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HuntingSchemaFunctionParameter::class);
            /** @var array<HuntingSchemaFunctionParameter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inputParameters'");
    }

    /**
     * Gets the name property value. Name of the function. Required.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the outputColumns property value. Collection of columns returned by the function.
     * @return array<HuntingSchemaTableColumn>|null
    */
    public function getOutputColumns(): ?array {
        $val = $this->getBackingStore()->get('outputColumns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HuntingSchemaTableColumn::class);
            /** @var array<HuntingSchemaTableColumn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outputColumns'");
    }

    /**
     * Gets the path property value. Folder path of the function.
     * @return string|null
    */
    public function getPath(): ?string {
        $val = $this->getBackingStore()->get('path');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'path'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('documentation', $this->getDocumentation());
        $writer->writeCollectionOfObjectValues('inputParameters', $this->getInputParameters());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('outputColumns', $this->getOutputColumns());
        $writer->writeStringValue('path', $this->getPath());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the documentation property value. Description of the function and its usage.
     * @param string|null $value Value to set for the documentation property.
    */
    public function setDocumentation(?string $value): void {
        $this->getBackingStore()->set('documentation', $value);
    }

    /**
     * Sets the huntingFunctionId property value. Unique identifier for the function. Required.
     * @param int|null $value Value to set for the huntingFunctionId property.
    */
    public function setHuntingFunctionId(?int $value): void {
        $this->getBackingStore()->set('huntingFunctionId', $value);
    }

    /**
     * Sets the inputParameters property value. Collection of input parameters accepted by the function.
     * @param array<HuntingSchemaFunctionParameter>|null $value Value to set for the inputParameters property.
    */
    public function setInputParameters(?array $value): void {
        $this->getBackingStore()->set('inputParameters', $value);
    }

    /**
     * Sets the name property value. Name of the function. Required.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the outputColumns property value. Collection of columns returned by the function.
     * @param array<HuntingSchemaTableColumn>|null $value Value to set for the outputColumns property.
    */
    public function setOutputColumns(?array $value): void {
        $this->getBackingStore()->set('outputColumns', $value);
    }

    /**
     * Sets the path property value. Folder path of the function.
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

}
