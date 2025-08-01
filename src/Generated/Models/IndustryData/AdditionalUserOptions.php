<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AdditionalUserOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AdditionalUserOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalUserOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalUserOptions {
        return new AdditionalUserOptions();
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
     * Gets the allowStudentContactAssociation property value. Indicates whether student contact association should be allowed.
     * @return bool|null
    */
    public function getAllowStudentContactAssociation(): ?bool {
        $val = $this->getBackingStore()->get('allowStudentContactAssociation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowStudentContactAssociation'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowStudentContactAssociation' => fn(ParseNode $n) => $o->setAllowStudentContactAssociation($n->getBooleanValue()),
            'markAllStudentsAsMinors' => fn(ParseNode $n) => $o->setMarkAllStudentsAsMinors($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'studentAgeGroup' => fn(ParseNode $n) => $o->setStudentAgeGroup($n->getEnumValue(StudentAgeGroup::class)),
        ];
    }

    /**
     * Gets the markAllStudentsAsMinors property value. Indicates whether all students should be marked as minors. The markAllStudentsAsMinors property is deprecated and will stop returning data on October 15, 2025. Going forward, use the studentAgeGroup property.
     * @return bool|null
    */
    public function getMarkAllStudentsAsMinors(): ?bool {
        $val = $this->getBackingStore()->get('markAllStudentsAsMinors');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'markAllStudentsAsMinors'");
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
     * Gets the studentAgeGroup property value. Indicates the age group classification for students. Possible values are: minor, notAdult, adult, unknownFutureValue. Use null to disable age group enforcement.
     * @return StudentAgeGroup|null
    */
    public function getStudentAgeGroup(): ?StudentAgeGroup {
        $val = $this->getBackingStore()->get('studentAgeGroup');
        if (is_null($val) || $val instanceof StudentAgeGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'studentAgeGroup'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowStudentContactAssociation', $this->getAllowStudentContactAssociation());
        $writer->writeBooleanValue('markAllStudentsAsMinors', $this->getMarkAllStudentsAsMinors());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('studentAgeGroup', $this->getStudentAgeGroup());
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
     * Sets the allowStudentContactAssociation property value. Indicates whether student contact association should be allowed.
     * @param bool|null $value Value to set for the allowStudentContactAssociation property.
    */
    public function setAllowStudentContactAssociation(?bool $value): void {
        $this->getBackingStore()->set('allowStudentContactAssociation', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the markAllStudentsAsMinors property value. Indicates whether all students should be marked as minors. The markAllStudentsAsMinors property is deprecated and will stop returning data on October 15, 2025. Going forward, use the studentAgeGroup property.
     * @param bool|null $value Value to set for the markAllStudentsAsMinors property.
    */
    public function setMarkAllStudentsAsMinors(?bool $value): void {
        $this->getBackingStore()->set('markAllStudentsAsMinors', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the studentAgeGroup property value. Indicates the age group classification for students. Possible values are: minor, notAdult, adult, unknownFutureValue. Use null to disable age group enforcement.
     * @param StudentAgeGroup|null $value Value to set for the studentAgeGroup property.
    */
    public function setStudentAgeGroup(?StudentAgeGroup $value): void {
        $this->getBackingStore()->set('studentAgeGroup', $value);
    }

}
