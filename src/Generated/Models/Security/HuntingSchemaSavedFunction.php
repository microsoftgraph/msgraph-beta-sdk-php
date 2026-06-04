<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HuntingSchemaSavedFunction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new HuntingSchemaSavedFunction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HuntingSchemaSavedFunction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HuntingSchemaSavedFunction {
        return new HuntingSchemaSavedFunction();
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
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'huntingFunctionId' => fn(ParseNode $n) => $o->setHuntingFunctionId($n->getIntegerValue()),
            'inputParameters' => fn(ParseNode $n) => $o->setInputParameters($n->getCollectionOfObjectValues([HuntingSchemaFunctionParameter::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outputColumns' => fn(ParseNode $n) => $o->setOutputColumns($n->getCollectionOfObjectValues([HuntingSchemaTableColumn::class, 'createFromDiscriminatorValue'])),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
        ];
    }

    /**
     * Gets the huntingFunctionId property value. The huntingFunctionId property
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
     * Gets the inputParameters property value. The inputParameters property
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
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the name property value. The name property
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
     * Gets the outputColumns property value. The outputColumns property
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
     * Gets the path property value. The path property
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
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('inputParameters', $this->getInputParameters());
        $writer->writeStringValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
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
     * Sets the createdBy property value. The createdBy property
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the huntingFunctionId property value. The huntingFunctionId property
     * @param int|null $value Value to set for the huntingFunctionId property.
    */
    public function setHuntingFunctionId(?int $value): void {
        $this->getBackingStore()->set('huntingFunctionId', $value);
    }

    /**
     * Sets the inputParameters property value. The inputParameters property
     * @param array<HuntingSchemaFunctionParameter>|null $value Value to set for the inputParameters property.
    */
    public function setInputParameters(?array $value): void {
        $this->getBackingStore()->set('inputParameters', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. The name property
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
     * Sets the outputColumns property value. The outputColumns property
     * @param array<HuntingSchemaTableColumn>|null $value Value to set for the outputColumns property.
    */
    public function setOutputColumns(?array $value): void {
        $this->getBackingStore()->set('outputColumns', $value);
    }

    /**
     * Sets the path property value. The path property
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

}
