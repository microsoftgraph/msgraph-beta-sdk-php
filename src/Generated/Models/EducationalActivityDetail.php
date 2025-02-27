<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationalActivityDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EducationalActivityDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationalActivityDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationalActivityDetail {
        return new EducationalActivityDetail();
    }

    /**
     * Gets the abbreviation property value. Shortened name of the degree or program (example: PhD, MBA)
     * @return string|null
    */
    public function getAbbreviation(): ?string {
        $val = $this->getBackingStore()->get('abbreviation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'abbreviation'");
    }

    /**
     * Gets the activities property value. Extracurricular activities undertaken alongside the program.
     * @return array<string>|null
    */
    public function getActivities(): ?array {
        $val = $this->getBackingStore()->get('activities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
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
     * Gets the awards property value. Any awards or honors associated with the program.
     * @return array<string>|null
    */
    public function getAwards(): ?array {
        $val = $this->getBackingStore()->get('awards');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'awards'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the description property value. Short description of the program provided by the user.
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
     * Gets the displayName property value. Long-form name of the program that the user provided.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'abbreviation' => fn(ParseNode $n) => $o->setAbbreviation($n->getStringValue()),
            'activities' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setActivities($val);
            },
            'awards' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAwards($val);
            },
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fieldsOfStudy' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFieldsOfStudy($val);
            },
            'grade' => fn(ParseNode $n) => $o->setGrade($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the fieldsOfStudy property value. Majors and minors associated with the program. (if applicable)
     * @return array<string>|null
    */
    public function getFieldsOfStudy(): ?array {
        $val = $this->getBackingStore()->get('fieldsOfStudy');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fieldsOfStudy'");
    }

    /**
     * Gets the grade property value. The final grade, class, GPA, or score.
     * @return string|null
    */
    public function getGrade(): ?string {
        $val = $this->getBackingStore()->get('grade');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grade'");
    }

    /**
     * Gets the notes property value. More notes the user provided.
     * @return string|null
    */
    public function getNotes(): ?string {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
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
     * Gets the webUrl property value. Link to the degree or program page.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('abbreviation', $this->getAbbreviation());
        $writer->writeCollectionOfPrimitiveValues('activities', $this->getActivities());
        $writer->writeCollectionOfPrimitiveValues('awards', $this->getAwards());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('fieldsOfStudy', $this->getFieldsOfStudy());
        $writer->writeStringValue('grade', $this->getGrade());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the abbreviation property value. Shortened name of the degree or program (example: PhD, MBA)
     * @param string|null $value Value to set for the abbreviation property.
    */
    public function setAbbreviation(?string $value): void {
        $this->getBackingStore()->set('abbreviation', $value);
    }

    /**
     * Sets the activities property value. Extracurricular activities undertaken alongside the program.
     * @param array<string>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the awards property value. Any awards or honors associated with the program.
     * @param array<string>|null $value Value to set for the awards property.
    */
    public function setAwards(?array $value): void {
        $this->getBackingStore()->set('awards', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. Short description of the program provided by the user.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Long-form name of the program that the user provided.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fieldsOfStudy property value. Majors and minors associated with the program. (if applicable)
     * @param array<string>|null $value Value to set for the fieldsOfStudy property.
    */
    public function setFieldsOfStudy(?array $value): void {
        $this->getBackingStore()->set('fieldsOfStudy', $value);
    }

    /**
     * Sets the grade property value. The final grade, class, GPA, or score.
     * @param string|null $value Value to set for the grade property.
    */
    public function setGrade(?string $value): void {
        $this->getBackingStore()->set('grade', $value);
    }

    /**
     * Sets the notes property value. More notes the user provided.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the webUrl property value. Link to the degree or program page.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
