<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVpnConfiguration extends AppleVpnConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $cloudName Zscaler only. Zscaler cloud which the user is assigned to.
    */
    private ?string $cloudName = null;
    
    /**
     * @var DeviceManagementDerivedCredentialSettings|null $derivedCredentialSettings Tenant level settings for the Derived Credentials to be used for authentication.
    */
    private ?DeviceManagementDerivedCredentialSettings $derivedCredentialSettings = null;
    
    /**
     * @var array<string>|null $excludeList Zscaler only. List of network addresses which are not sent through the Zscaler cloud.
    */
    private ?array $excludeList = null;
    
    /**
     * @var IosCertificateProfileBase|null $identityCertificate Identity certificate for client authentication when authentication method is certificate.
    */
    private ?IosCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var string|null $microsoftTunnelSiteId Microsoft Tunnel site ID.
    */
    private ?string $microsoftTunnelSiteId = null;
    
    /**
     * @var bool|null $strictEnforcement Zscaler only. Blocks network traffic until the user signs into Zscaler app. 'True' means traffic is blocked.
    */
    private ?bool $strictEnforcement = null;
    
    /**
     * @var array<AppListItem>|null $targetedMobileApps Targeted mobile apps. This collection can contain a maximum of 500 elements.
    */
    private ?array $targetedMobileApps = null;
    
    /**
     * @var string|null $userDomain Zscaler only. Enter a static domain to pre-populate the login field with in the Zscaler app. If this is left empty, the user's Azure Active Directory domain will be used instead.
    */
    private ?string $userDomain = null;
    
    /**
     * Instantiates a new IosVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cloudName property value. Zscaler only. Zscaler cloud which the user is assigned to.
     * @return string|null
    */
    public function getCloudName(): ?string {
        return $this->cloudName;
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        return $this->derivedCredentialSettings;
    }

    /**
     * Gets the excludeList property value. Zscaler only. List of network addresses which are not sent through the Zscaler cloud.
     * @return array<string>|null
    */
    public function getExcludeList(): ?array {
        return $this->excludeList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudName' => function (ParseNode $n) use ($o) { $o->setCloudName($n->getStringValue()); },
            'derivedCredentialSettings' => function (ParseNode $n) use ($o) { $o->setDerivedCredentialSettings($n->getObjectValue(array(DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'))); },
            'excludeList' => function (ParseNode $n) use ($o) { $o->setExcludeList($n->getCollectionOfPrimitiveValues()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(IosCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'microsoftTunnelSiteId' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelSiteId($n->getStringValue()); },
            'strictEnforcement' => function (ParseNode $n) use ($o) { $o->setStrictEnforcement($n->getBooleanValue()); },
            'targetedMobileApps' => function (ParseNode $n) use ($o) { $o->setTargetedMobileApps($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'userDomain' => function (ParseNode $n) use ($o) { $o->setUserDomain($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?IosCertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Gets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @return string|null
    */
    public function getMicrosoftTunnelSiteId(): ?string {
        return $this->microsoftTunnelSiteId;
    }

    /**
     * Gets the strictEnforcement property value. Zscaler only. Blocks network traffic until the user signs into Zscaler app. 'True' means traffic is blocked.
     * @return bool|null
    */
    public function getStrictEnforcement(): ?bool {
        return $this->strictEnforcement;
    }

    /**
     * Gets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getTargetedMobileApps(): ?array {
        return $this->targetedMobileApps;
    }

    /**
     * Gets the userDomain property value. Zscaler only. Enter a static domain to pre-populate the login field with in the Zscaler app. If this is left empty, the user's Azure Active Directory domain will be used instead.
     * @return string|null
    */
    public function getUserDomain(): ?string {
        return $this->userDomain;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudName', $this->cloudName);
        $writer->writeObjectValue('derivedCredentialSettings', $this->derivedCredentialSettings);
        $writer->writeCollectionOfPrimitiveValues('excludeList', $this->excludeList);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeStringValue('microsoftTunnelSiteId', $this->microsoftTunnelSiteId);
        $writer->writeBooleanValue('strictEnforcement', $this->strictEnforcement);
        $writer->writeCollectionOfObjectValues('targetedMobileApps', $this->targetedMobileApps);
        $writer->writeStringValue('userDomain', $this->userDomain);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the cloudName property value. Zscaler only. Zscaler cloud which the user is assigned to.
     *  @param string|null $value Value to set for the cloudName property.
    */
    public function setCloudName(?string $value ): void {
        $this->cloudName = $value;
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     *  @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value ): void {
        $this->derivedCredentialSettings = $value;
    }

    /**
     * Sets the excludeList property value. Zscaler only. List of network addresses which are not sent through the Zscaler cloud.
     *  @param array<string>|null $value Value to set for the excludeList property.
    */
    public function setExcludeList(?array $value ): void {
        $this->excludeList = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     *  @param IosCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?IosCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

    /**
     * Sets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     *  @param string|null $value Value to set for the microsoftTunnelSiteId property.
    */
    public function setMicrosoftTunnelSiteId(?string $value ): void {
        $this->microsoftTunnelSiteId = $value;
    }

    /**
     * Sets the strictEnforcement property value. Zscaler only. Blocks network traffic until the user signs into Zscaler app. 'True' means traffic is blocked.
     *  @param bool|null $value Value to set for the strictEnforcement property.
    */
    public function setStrictEnforcement(?bool $value ): void {
        $this->strictEnforcement = $value;
    }

    /**
     * Sets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the targetedMobileApps property.
    */
    public function setTargetedMobileApps(?array $value ): void {
        $this->targetedMobileApps = $value;
    }

    /**
     * Sets the userDomain property value. Zscaler only. Enter a static domain to pre-populate the login field with in the Zscaler app. If this is left empty, the user's Azure Active Directory domain will be used instead.
     *  @param string|null $value Value to set for the userDomain property.
    */
    public function setUserDomain(?string $value ): void {
        $this->userDomain = $value;
    }

}
