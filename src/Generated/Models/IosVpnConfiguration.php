<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IosVpnConfiguration extends AppleVpnConfiguration implements Parsable 
{
    /**
     * Instantiates a new IosVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVpnConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosikEv2VpnConfiguration': return new IosikEv2VpnConfiguration();
            }
        }
        return new IosVpnConfiguration();
    }

    /**
     * Gets the cloudName property value. Zscaler only. Zscaler cloud which the user is assigned to.
     * @return string|null
    */
    public function getCloudName(): ?string {
        $val = $this->getBackingStore()->get('cloudName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudName'");
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        $val = $this->getBackingStore()->get('derivedCredentialSettings');
        if (is_null($val) || $val instanceof DeviceManagementDerivedCredentialSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'derivedCredentialSettings'");
    }

    /**
     * Gets the excludeList property value. Zscaler only. List of network addresses which are not sent through the Zscaler cloud.
     * @return array<string>|null
    */
    public function getExcludeList(): ?array {
        $val = $this->getBackingStore()->get('excludeList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeList'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudName' => fn(ParseNode $n) => $o->setCloudName($n->getStringValue()),
            'derivedCredentialSettings' => fn(ParseNode $n) => $o->setDerivedCredentialSettings($n->getObjectValue([DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'])),
            'excludeList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludeList($val);
            },
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([IosCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelSiteId' => fn(ParseNode $n) => $o->setMicrosoftTunnelSiteId($n->getStringValue()),
            'strictEnforcement' => fn(ParseNode $n) => $o->setStrictEnforcement($n->getBooleanValue()),
            'targetedMobileApps' => fn(ParseNode $n) => $o->setTargetedMobileApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'userDomain' => fn(ParseNode $n) => $o->setUserDomain($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?IosCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificate');
        if (is_null($val) || $val instanceof IosCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificate'");
    }

    /**
     * Gets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @return string|null
    */
    public function getMicrosoftTunnelSiteId(): ?string {
        $val = $this->getBackingStore()->get('microsoftTunnelSiteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftTunnelSiteId'");
    }

    /**
     * Gets the strictEnforcement property value. Zscaler only. Blocks network traffic until the user signs into Zscaler app. 'True' means traffic is blocked.
     * @return bool|null
    */
    public function getStrictEnforcement(): ?bool {
        $val = $this->getBackingStore()->get('strictEnforcement');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'strictEnforcement'");
    }

    /**
     * Gets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getTargetedMobileApps(): ?array {
        $val = $this->getBackingStore()->get('targetedMobileApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedMobileApps'");
    }

    /**
     * Gets the userDomain property value. Zscaler only. Enter a static domain to pre-populate the login field with in the Zscaler app. If this is left empty, the user's Azure Active Directory domain will be used instead.
     * @return string|null
    */
    public function getUserDomain(): ?string {
        $val = $this->getBackingStore()->get('userDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDomain'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudName', $this->getCloudName());
        $writer->writeObjectValue('derivedCredentialSettings', $this->getDerivedCredentialSettings());
        $writer->writeCollectionOfPrimitiveValues('excludeList', $this->getExcludeList());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeStringValue('microsoftTunnelSiteId', $this->getMicrosoftTunnelSiteId());
        $writer->writeBooleanValue('strictEnforcement', $this->getStrictEnforcement());
        $writer->writeCollectionOfObjectValues('targetedMobileApps', $this->getTargetedMobileApps());
        $writer->writeStringValue('userDomain', $this->getUserDomain());
    }

    /**
     * Sets the cloudName property value. Zscaler only. Zscaler cloud which the user is assigned to.
     * @param string|null $value Value to set for the cloudName property.
    */
    public function setCloudName(?string $value): void {
        $this->getBackingStore()->set('cloudName', $value);
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value): void {
        $this->getBackingStore()->set('derivedCredentialSettings', $value);
    }

    /**
     * Sets the excludeList property value. Zscaler only. List of network addresses which are not sent through the Zscaler cloud.
     * @param array<string>|null $value Value to set for the excludeList property.
    */
    public function setExcludeList(?array $value): void {
        $this->getBackingStore()->set('excludeList', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @param IosCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?IosCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

    /**
     * Sets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @param string|null $value Value to set for the microsoftTunnelSiteId property.
    */
    public function setMicrosoftTunnelSiteId(?string $value): void {
        $this->getBackingStore()->set('microsoftTunnelSiteId', $value);
    }

    /**
     * Sets the strictEnforcement property value. Zscaler only. Blocks network traffic until the user signs into Zscaler app. 'True' means traffic is blocked.
     * @param bool|null $value Value to set for the strictEnforcement property.
    */
    public function setStrictEnforcement(?bool $value): void {
        $this->getBackingStore()->set('strictEnforcement', $value);
    }

    /**
     * Sets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the targetedMobileApps property.
    */
    public function setTargetedMobileApps(?array $value): void {
        $this->getBackingStore()->set('targetedMobileApps', $value);
    }

    /**
     * Sets the userDomain property value. Zscaler only. Enter a static domain to pre-populate the login field with in the Zscaler app. If this is left empty, the user's Azure Active Directory domain will be used instead.
     * @param string|null $value Value to set for the userDomain property.
    */
    public function setUserDomain(?string $value): void {
        $this->getBackingStore()->set('userDomain', $value);
    }

}
