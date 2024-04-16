<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The listing service profile entity contains the meta data of an Intune configuration profile 
*/
class DeviceConfigurationProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceConfigurationProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationProfile {
        return new DeviceConfigurationProfile();
    }

    /**
     * Gets the accountId property value. Account Id.
     * @return string|null
    */
    public function getAccountId(): ?string {
        $val = $this->getBackingStore()->get('accountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountId'");
    }

    /**
     * Gets the configurationTechnologies property value. Configuration Technologies for Settins Catalog Policies
     * @return int|null
    */
    public function getConfigurationTechnologies(): ?int {
        $val = $this->getBackingStore()->get('configurationTechnologies');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationTechnologies'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'configurationTechnologies' => fn(ParseNode $n) => $o->setConfigurationTechnologies($n->getIntegerValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'platformType' => fn(ParseNode $n) => $o->setPlatformType($n->getEnumValue(PlatformType::class)),
            'profileName' => fn(ParseNode $n) => $o->setProfileName($n->getStringValue()),
            'profileType' => fn(ParseNode $n) => $o->setProfileType($n->getEnumValue(ProfileType::class)),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
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
     * Gets the platformType property value. Platform Type
     * @return PlatformType|null
    */
    public function getPlatformType(): ?PlatformType {
        $val = $this->getBackingStore()->get('platformType');
        if (is_null($val) || $val instanceof PlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformType'");
    }

    /**
     * Gets the profileName property value. Profile name
     * @return string|null
    */
    public function getProfileName(): ?string {
        $val = $this->getBackingStore()->get('profileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileName'");
    }

    /**
     * Gets the profileType property value. Profile Type
     * @return ProfileType|null
    */
    public function getProfileType(): ?ProfileType {
        $val = $this->getBackingStore()->get('profileType');
        if (is_null($val) || $val instanceof ProfileType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileType'");
    }

    /**
     * Gets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the templateId property value. TemplateId for Settings Catalog Policies
     * @return string|null
    */
    public function getTemplateId(): ?string {
        $val = $this->getBackingStore()->get('templateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeIntegerValue('configurationTechnologies', $this->getConfigurationTechnologies());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('platformType', $this->getPlatformType());
        $writer->writeStringValue('profileName', $this->getProfileName());
        $writer->writeEnumValue('profileType', $this->getProfileType());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeStringValue('templateId', $this->getTemplateId());
    }

    /**
     * Sets the accountId property value. Account Id.
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the configurationTechnologies property value. Configuration Technologies for Settins Catalog Policies
     * @param int|null $value Value to set for the configurationTechnologies property.
    */
    public function setConfigurationTechnologies(?int $value): void {
        $this->getBackingStore()->set('configurationTechnologies', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the platformType property value. Platform Type
     * @param PlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PlatformType $value): void {
        $this->getBackingStore()->set('platformType', $value);
    }

    /**
     * Sets the profileName property value. Profile name
     * @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value): void {
        $this->getBackingStore()->set('profileName', $value);
    }

    /**
     * Sets the profileType property value. Profile Type
     * @param ProfileType|null $value Value to set for the profileType property.
    */
    public function setProfileType(?ProfileType $value): void {
        $this->getBackingStore()->set('profileType', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the templateId property value. TemplateId for Settings Catalog Policies
     * @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

}
