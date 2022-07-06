<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportedDeviceIdentity extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime Created Date Time of the device
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the device
    */
    private ?string $description = null;
    
    /**
     * @var EnrollmentState|null $enrollmentState The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
    */
    private ?EnrollmentState $enrollmentState = null;
    
    /**
     * @var string|null $importedDeviceIdentifier Imported Device Identifier
    */
    private ?string $importedDeviceIdentifier = null;
    
    /**
     * @var ImportedDeviceIdentityType|null $importedDeviceIdentityType Type of Imported Device Identity. Possible values are: unknown, imei, serialNumber.
    */
    private ?ImportedDeviceIdentityType $importedDeviceIdentityType = null;
    
    /**
     * @var DateTime|null $lastContactedDateTime Last Contacted Date Time of the device
    */
    private ?DateTime $lastContactedDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last Modified DateTime of the description
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var Platform|null $platform The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
    */
    private ?Platform $platform = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new ImportedDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedDeviceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedDeviceIdentity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.importedDeviceIdentityResult': return new ImportedDeviceIdentityResult();
            }
        }
        return new ImportedDeviceIdentity();
    }

    /**
     * Gets the createdDateTime property value. Created Date Time of the device
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the device
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the enrollmentState property value. The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        return $this->enrollmentState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'enrollmentState' => function (ParseNode $n) use ($o) { $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)); },
            'importedDeviceIdentifier' => function (ParseNode $n) use ($o) { $o->setImportedDeviceIdentifier($n->getStringValue()); },
            'importedDeviceIdentityType' => function (ParseNode $n) use ($o) { $o->setImportedDeviceIdentityType($n->getEnumValue(ImportedDeviceIdentityType::class)); },
            'lastContactedDateTime' => function (ParseNode $n) use ($o) { $o->setLastContactedDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(Platform::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the importedDeviceIdentifier property value. Imported Device Identifier
     * @return string|null
    */
    public function getImportedDeviceIdentifier(): ?string {
        return $this->importedDeviceIdentifier;
    }

    /**
     * Gets the importedDeviceIdentityType property value. Type of Imported Device Identity. Possible values are: unknown, imei, serialNumber.
     * @return ImportedDeviceIdentityType|null
    */
    public function getImportedDeviceIdentityType(): ?ImportedDeviceIdentityType {
        return $this->importedDeviceIdentityType;
    }

    /**
     * Gets the lastContactedDateTime property value. Last Contacted Date Time of the device
     * @return DateTime|null
    */
    public function getLastContactedDateTime(): ?DateTime {
        return $this->lastContactedDateTime;
    }

    /**
     * Gets the lastModifiedDateTime property value. Last Modified DateTime of the description
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the platform property value. The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
     * @return Platform|null
    */
    public function getPlatform(): ?Platform {
        return $this->platform;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('enrollmentState', $this->enrollmentState);
        $writer->writeStringValue('importedDeviceIdentifier', $this->importedDeviceIdentifier);
        $writer->writeEnumValue('importedDeviceIdentityType', $this->importedDeviceIdentityType);
        $writer->writeDateTimeValue('lastContactedDateTime', $this->lastContactedDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeStringValue('@odata.type', $this->type);
    }

    /**
     * Sets the createdDateTime property value. Created Date Time of the device
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the device
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the enrollmentState property value. The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
     *  @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value ): void {
        $this->enrollmentState = $value;
    }

    /**
     * Sets the importedDeviceIdentifier property value. Imported Device Identifier
     *  @param string|null $value Value to set for the importedDeviceIdentifier property.
    */
    public function setImportedDeviceIdentifier(?string $value ): void {
        $this->importedDeviceIdentifier = $value;
    }

    /**
     * Sets the importedDeviceIdentityType property value. Type of Imported Device Identity. Possible values are: unknown, imei, serialNumber.
     *  @param ImportedDeviceIdentityType|null $value Value to set for the importedDeviceIdentityType property.
    */
    public function setImportedDeviceIdentityType(?ImportedDeviceIdentityType $value ): void {
        $this->importedDeviceIdentityType = $value;
    }

    /**
     * Sets the lastContactedDateTime property value. Last Contacted Date Time of the device
     *  @param DateTime|null $value Value to set for the lastContactedDateTime property.
    */
    public function setLastContactedDateTime(?DateTime $value ): void {
        $this->lastContactedDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last Modified DateTime of the description
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the platform property value. The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
     *  @param Platform|null $value Value to set for the platform property.
    */
    public function setPlatform(?Platform $value ): void {
        $this->platform = $value;
    }

}
