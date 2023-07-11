<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationPowerSchoolDataProvider extends EducationSynchronizationDataProvider implements Parsable 
{
    /**
     * Instantiates a new educationPowerSchoolDataProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationPowerSchoolDataProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationPowerSchoolDataProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationPowerSchoolDataProvider {
        return new EducationPowerSchoolDataProvider();
    }

    /**
     * Gets the allowTeachersInMultipleSchools property value. Indicates whether the source has multiple identifiers for a single student or teacher.
     * @return bool|null
    */
    public function getAllowTeachersInMultipleSchools(): ?bool {
        $val = $this->getBackingStore()->get('allowTeachersInMultipleSchools');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowTeachersInMultipleSchools'");
    }

    /**
     * Gets the clientId property value. The client ID used to connect to PowerSchool.
     * @return string|null
    */
    public function getClientId(): ?string {
        $val = $this->getBackingStore()->get('clientId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientId'");
    }

    /**
     * Gets the clientSecret property value. The client secret to authenticate the connection to the PowerSchool instance.
     * @return string|null
    */
    public function getClientSecret(): ?string {
        $val = $this->getBackingStore()->get('clientSecret');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientSecret'");
    }

    /**
     * Gets the connectionUrl property value. The connection URL to the PowerSchool instance.
     * @return string|null
    */
    public function getConnectionUrl(): ?string {
        $val = $this->getBackingStore()->get('connectionUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionUrl'");
    }

    /**
     * Gets the customizations property value. Optional customization to be applied to the synchronization profile.
     * @return EducationSynchronizationCustomizations|null
    */
    public function getCustomizations(): ?EducationSynchronizationCustomizations {
        $val = $this->getBackingStore()->get('customizations');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomizations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customizations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowTeachersInMultipleSchools' => fn(ParseNode $n) => $o->setAllowTeachersInMultipleSchools($n->getBooleanValue()),
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'connectionUrl' => fn(ParseNode $n) => $o->setConnectionUrl($n->getStringValue()),
            'customizations' => fn(ParseNode $n) => $o->setCustomizations($n->getObjectValue([EducationSynchronizationCustomizations::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'schoolsIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSchoolsIds($val);
            },
            'schoolYear' => fn(ParseNode $n) => $o->setSchoolYear($n->getStringValue()),
        ]);
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
     * Gets the schoolsIds property value. The list of schools to sync.
     * @return array<string>|null
    */
    public function getSchoolsIds(): ?array {
        $val = $this->getBackingStore()->get('schoolsIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schoolsIds'");
    }

    /**
     * Gets the schoolYear property value. The school year to sync.
     * @return string|null
    */
    public function getSchoolYear(): ?string {
        $val = $this->getBackingStore()->get('schoolYear');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schoolYear'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowTeachersInMultipleSchools', $this->getAllowTeachersInMultipleSchools());
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
        $writer->writeStringValue('connectionUrl', $this->getConnectionUrl());
        $writer->writeObjectValue('customizations', $this->getCustomizations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('schoolsIds', $this->getSchoolsIds());
        $writer->writeStringValue('schoolYear', $this->getSchoolYear());
    }

    /**
     * Sets the allowTeachersInMultipleSchools property value. Indicates whether the source has multiple identifiers for a single student or teacher.
     * @param bool|null $value Value to set for the allowTeachersInMultipleSchools property.
    */
    public function setAllowTeachersInMultipleSchools(?bool $value): void {
        $this->getBackingStore()->set('allowTeachersInMultipleSchools', $value);
    }

    /**
     * Sets the clientId property value. The client ID used to connect to PowerSchool.
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the clientSecret property value. The client secret to authenticate the connection to the PowerSchool instance.
     * @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->getBackingStore()->set('clientSecret', $value);
    }

    /**
     * Sets the connectionUrl property value. The connection URL to the PowerSchool instance.
     * @param string|null $value Value to set for the connectionUrl property.
    */
    public function setConnectionUrl(?string $value): void {
        $this->getBackingStore()->set('connectionUrl', $value);
    }

    /**
     * Sets the customizations property value. Optional customization to be applied to the synchronization profile.
     * @param EducationSynchronizationCustomizations|null $value Value to set for the customizations property.
    */
    public function setCustomizations(?EducationSynchronizationCustomizations $value): void {
        $this->getBackingStore()->set('customizations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the schoolsIds property value. The list of schools to sync.
     * @param array<string>|null $value Value to set for the schoolsIds property.
    */
    public function setSchoolsIds(?array $value): void {
        $this->getBackingStore()->set('schoolsIds', $value);
    }

    /**
     * Sets the schoolYear property value. The school year to sync.
     * @param string|null $value Value to set for the schoolYear property.
    */
    public function setSchoolYear(?string $value): void {
        $this->getBackingStore()->set('schoolYear', $value);
    }

}
