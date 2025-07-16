<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ClassGroupConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ClassGroupConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassGroupConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassGroupConfiguration {
        return new ClassGroupConfiguration();
    }

    /**
     * Gets the additionalAttributes property value. The different attributes to sync for the class groups. The possible values are: courseTitle, courseCode, courseSubject, courseGradeLevel, courseExternalId, academicSessionTitle, academicSessionExternalId, classCode, unknownFutureValue.
     * @return array<AdditionalClassGroupAttributes>|null
    */
    public function getAdditionalAttributes(): ?array {
        $val = $this->getBackingStore()->get('additionalAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AdditionalClassGroupAttributes::class);
            /** @var array<AdditionalClassGroupAttributes>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalAttributes'");
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
     * Gets the additionalOptions property value. The additionalOptions property
     * @return AdditionalClassGroupOptions|null
    */
    public function getAdditionalOptions(): ?AdditionalClassGroupOptions {
        $val = $this->getBackingStore()->get('additionalOptions');
        if (is_null($val) || $val instanceof AdditionalClassGroupOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalOptions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enrollmentMappings property value. The enrollmentMappings property
     * @return EnrollmentMappings|null
    */
    public function getEnrollmentMappings(): ?EnrollmentMappings {
        $val = $this->getBackingStore()->get('enrollmentMappings');
        if (is_null($val) || $val instanceof EnrollmentMappings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentMappings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalAttributes' => fn(ParseNode $n) => $o->setAdditionalAttributes($n->getCollectionOfEnumValues(AdditionalClassGroupAttributes::class)),
            'additionalOptions' => fn(ParseNode $n) => $o->setAdditionalOptions($n->getObjectValue([AdditionalClassGroupOptions::class, 'createFromDiscriminatorValue'])),
            'enrollmentMappings' => fn(ParseNode $n) => $o->setEnrollmentMappings($n->getObjectValue([EnrollmentMappings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('additionalAttributes', $this->getAdditionalAttributes());
        $writer->writeObjectValue('additionalOptions', $this->getAdditionalOptions());
        $writer->writeObjectValue('enrollmentMappings', $this->getEnrollmentMappings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalAttributes property value. The different attributes to sync for the class groups. The possible values are: courseTitle, courseCode, courseSubject, courseGradeLevel, courseExternalId, academicSessionTitle, academicSessionExternalId, classCode, unknownFutureValue.
     * @param array<AdditionalClassGroupAttributes>|null $value Value to set for the additionalAttributes property.
    */
    public function setAdditionalAttributes(?array $value): void {
        $this->getBackingStore()->set('additionalAttributes', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalOptions property value. The additionalOptions property
     * @param AdditionalClassGroupOptions|null $value Value to set for the additionalOptions property.
    */
    public function setAdditionalOptions(?AdditionalClassGroupOptions $value): void {
        $this->getBackingStore()->set('additionalOptions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enrollmentMappings property value. The enrollmentMappings property
     * @param EnrollmentMappings|null $value Value to set for the enrollmentMappings property.
    */
    public function setEnrollmentMappings(?EnrollmentMappings $value): void {
        $this->getBackingStore()->set('enrollmentMappings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
