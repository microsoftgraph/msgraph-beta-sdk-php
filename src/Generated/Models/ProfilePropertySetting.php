<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProfilePropertySetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new ProfilePropertySetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProfilePropertySetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProfilePropertySetting {
        return new ProfilePropertySetting();
    }

    /**
     * Gets the allowedAudiences property value. A privacy setting that reflects the allowed audience for the configured property. The possible values are: me, organization, federatedOrganizations, everyone, unknownFutureValue.
     * @return OrganizationAllowedAudiences|null
    */
    public function getAllowedAudiences(): ?OrganizationAllowedAudiences {
        $val = $this->getBackingStore()->get('allowedAudiences');
        if (is_null($val) || $val instanceof OrganizationAllowedAudiences) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedAudiences'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAudiences' => fn(ParseNode $n) => $o->setAllowedAudiences($n->getEnumValue(OrganizationAllowedAudiences::class)),
            'isUserOverrideForAudienceEnabled' => fn(ParseNode $n) => $o->setIsUserOverrideForAudienceEnabled($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'prioritizedSourceUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPrioritizedSourceUrls($val);
            },
        ]);
    }

    /**
     * Gets the isUserOverrideForAudienceEnabled property value. Defines whether a user is allowed to override the tenant admin privacy setting.
     * @return bool|null
    */
    public function getIsUserOverrideForAudienceEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isUserOverrideForAudienceEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUserOverrideForAudienceEnabled'");
    }

    /**
     * Gets the name property value. Name of the property-level setting.
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
     * Gets the prioritizedSourceUrls property value. A collection of prioritized profile source URLs ordered by data precedence within an organization.
     * @return array<string>|null
    */
    public function getPrioritizedSourceUrls(): ?array {
        $val = $this->getBackingStore()->get('prioritizedSourceUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'prioritizedSourceUrls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedAudiences', $this->getAllowedAudiences());
        $writer->writeBooleanValue('isUserOverrideForAudienceEnabled', $this->getIsUserOverrideForAudienceEnabled());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('prioritizedSourceUrls', $this->getPrioritizedSourceUrls());
    }

    /**
     * Sets the allowedAudiences property value. A privacy setting that reflects the allowed audience for the configured property. The possible values are: me, organization, federatedOrganizations, everyone, unknownFutureValue.
     * @param OrganizationAllowedAudiences|null $value Value to set for the allowedAudiences property.
    */
    public function setAllowedAudiences(?OrganizationAllowedAudiences $value): void {
        $this->getBackingStore()->set('allowedAudiences', $value);
    }

    /**
     * Sets the isUserOverrideForAudienceEnabled property value. Defines whether a user is allowed to override the tenant admin privacy setting.
     * @param bool|null $value Value to set for the isUserOverrideForAudienceEnabled property.
    */
    public function setIsUserOverrideForAudienceEnabled(?bool $value): void {
        $this->getBackingStore()->set('isUserOverrideForAudienceEnabled', $value);
    }

    /**
     * Sets the name property value. Name of the property-level setting.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the prioritizedSourceUrls property value. A collection of prioritized profile source URLs ordered by data precedence within an organization.
     * @param array<string>|null $value Value to set for the prioritizedSourceUrls property.
    */
    public function setPrioritizedSourceUrls(?array $value): void {
        $this->getBackingStore()->set('prioritizedSourceUrls', $value);
    }

}
