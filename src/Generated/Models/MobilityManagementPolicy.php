<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MobilityManagementPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new MobilityManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobilityManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobilityManagementPolicy {
        return new MobilityManagementPolicy();
    }

    /**
     * Gets the appliesTo property value. Indicates the user scope of the mobility management policy. Possible values are: none, all, selected.
     * @return PolicyScope|null
    */
    public function getAppliesTo(): ?PolicyScope {
        $val = $this->getBackingStore()->get('appliesTo');
        if (is_null($val) || $val instanceof PolicyScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliesTo'");
    }

    /**
     * Gets the complianceUrl property value. Compliance URL of the mobility management application.
     * @return string|null
    */
    public function getComplianceUrl(): ?string {
        $val = $this->getBackingStore()->get('complianceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceUrl'");
    }

    /**
     * Gets the description property value. Description of the mobility management application.
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
     * Gets the discoveryUrl property value. Discovery URL of the mobility management application.
     * @return string|null
    */
    public function getDiscoveryUrl(): ?string {
        $val = $this->getBackingStore()->get('discoveryUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discoveryUrl'");
    }

    /**
     * Gets the displayName property value. Display name of the mobility management application.
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
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getEnumValue(PolicyScope::class)),
            'complianceUrl' => fn(ParseNode $n) => $o->setComplianceUrl($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'discoveryUrl' => fn(ParseNode $n) => $o->setDiscoveryUrl($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'includedGroups' => fn(ParseNode $n) => $o->setIncludedGroups($n->getCollectionOfObjectValues([Group::class, 'createFromDiscriminatorValue'])),
            'isValid' => fn(ParseNode $n) => $o->setIsValid($n->getBooleanValue()),
            'termsOfUseUrl' => fn(ParseNode $n) => $o->setTermsOfUseUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the includedGroups property value. Microsoft Entra groups under the scope of the mobility management application if appliesTo is selected
     * @return array<Group>|null
    */
    public function getIncludedGroups(): ?array {
        $val = $this->getBackingStore()->get('includedGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Group::class);
            /** @var array<Group>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includedGroups'");
    }

    /**
     * Gets the isValid property value. Whether policy is valid. Invalid policies may not be updated and should be deleted.
     * @return bool|null
    */
    public function getIsValid(): ?bool {
        $val = $this->getBackingStore()->get('isValid');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isValid'");
    }

    /**
     * Gets the termsOfUseUrl property value. Terms of Use URL of the mobility management application.
     * @return string|null
    */
    public function getTermsOfUseUrl(): ?string {
        $val = $this->getBackingStore()->get('termsOfUseUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsOfUseUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appliesTo', $this->getAppliesTo());
        $writer->writeStringValue('complianceUrl', $this->getComplianceUrl());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('discoveryUrl', $this->getDiscoveryUrl());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('includedGroups', $this->getIncludedGroups());
        $writer->writeBooleanValue('isValid', $this->getIsValid());
        $writer->writeStringValue('termsOfUseUrl', $this->getTermsOfUseUrl());
    }

    /**
     * Sets the appliesTo property value. Indicates the user scope of the mobility management policy. Possible values are: none, all, selected.
     * @param PolicyScope|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?PolicyScope $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
    }

    /**
     * Sets the complianceUrl property value. Compliance URL of the mobility management application.
     * @param string|null $value Value to set for the complianceUrl property.
    */
    public function setComplianceUrl(?string $value): void {
        $this->getBackingStore()->set('complianceUrl', $value);
    }

    /**
     * Sets the description property value. Description of the mobility management application.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the discoveryUrl property value. Discovery URL of the mobility management application.
     * @param string|null $value Value to set for the discoveryUrl property.
    */
    public function setDiscoveryUrl(?string $value): void {
        $this->getBackingStore()->set('discoveryUrl', $value);
    }

    /**
     * Sets the displayName property value. Display name of the mobility management application.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the includedGroups property value. Microsoft Entra groups under the scope of the mobility management application if appliesTo is selected
     * @param array<Group>|null $value Value to set for the includedGroups property.
    */
    public function setIncludedGroups(?array $value): void {
        $this->getBackingStore()->set('includedGroups', $value);
    }

    /**
     * Sets the isValid property value. Whether policy is valid. Invalid policies may not be updated and should be deleted.
     * @param bool|null $value Value to set for the isValid property.
    */
    public function setIsValid(?bool $value): void {
        $this->getBackingStore()->set('isValid', $value);
    }

    /**
     * Sets the termsOfUseUrl property value. Terms of Use URL of the mobility management application.
     * @param string|null $value Value to set for the termsOfUseUrl property.
    */
    public function setTermsOfUseUrl(?string $value): void {
        $this->getBackingStore()->set('termsOfUseUrl', $value);
    }

}
