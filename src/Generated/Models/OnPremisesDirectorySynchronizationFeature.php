<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesDirectorySynchronizationFeature implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $blockCloudObjectTakeoverThroughHardMatchEnabled The blockCloudObjectTakeoverThroughHardMatchEnabled property
    */
    private ?bool $blockCloudObjectTakeoverThroughHardMatchEnabled = null;
    
    /**
     * @var bool|null $blockSoftMatchEnabled The blockSoftMatchEnabled property
    */
    private ?bool $blockSoftMatchEnabled = null;
    
    /**
     * @var bool|null $bypassDirSyncOverridesEnabled The bypassDirSyncOverridesEnabled property
    */
    private ?bool $bypassDirSyncOverridesEnabled = null;
    
    /**
     * @var bool|null $cloudPasswordPolicyForPasswordSyncedUsersEnabled The cloudPasswordPolicyForPasswordSyncedUsersEnabled property
    */
    private ?bool $cloudPasswordPolicyForPasswordSyncedUsersEnabled = null;
    
    /**
     * @var bool|null $concurrentCredentialUpdateEnabled The concurrentCredentialUpdateEnabled property
    */
    private ?bool $concurrentCredentialUpdateEnabled = null;
    
    /**
     * @var bool|null $concurrentOrgIdProvisioningEnabled The concurrentOrgIdProvisioningEnabled property
    */
    private ?bool $concurrentOrgIdProvisioningEnabled = null;
    
    /**
     * @var bool|null $deviceWritebackEnabled The deviceWritebackEnabled property
    */
    private ?bool $deviceWritebackEnabled = null;
    
    /**
     * @var bool|null $directoryExtensionsEnabled The directoryExtensionsEnabled property
    */
    private ?bool $directoryExtensionsEnabled = null;
    
    /**
     * @var bool|null $fopeConflictResolutionEnabled The fopeConflictResolutionEnabled property
    */
    private ?bool $fopeConflictResolutionEnabled = null;
    
    /**
     * @var bool|null $groupWriteBackEnabled The groupWriteBackEnabled property
    */
    private ?bool $groupWriteBackEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $passwordSyncEnabled The passwordSyncEnabled property
    */
    private ?bool $passwordSyncEnabled = null;
    
    /**
     * @var bool|null $passwordWritebackEnabled The passwordWritebackEnabled property
    */
    private ?bool $passwordWritebackEnabled = null;
    
    /**
     * @var bool|null $quarantineUponProxyAddressesConflictEnabled The quarantineUponProxyAddressesConflictEnabled property
    */
    private ?bool $quarantineUponProxyAddressesConflictEnabled = null;
    
    /**
     * @var bool|null $quarantineUponUpnConflictEnabled The quarantineUponUpnConflictEnabled property
    */
    private ?bool $quarantineUponUpnConflictEnabled = null;
    
    /**
     * @var bool|null $softMatchOnUpnEnabled The softMatchOnUpnEnabled property
    */
    private ?bool $softMatchOnUpnEnabled = null;
    
    /**
     * @var bool|null $synchronizeUpnForManagedUsersEnabled The synchronizeUpnForManagedUsersEnabled property
    */
    private ?bool $synchronizeUpnForManagedUsersEnabled = null;
    
    /**
     * @var bool|null $unifiedGroupWritebackEnabled The unifiedGroupWritebackEnabled property
    */
    private ?bool $unifiedGroupWritebackEnabled = null;
    
    /**
     * @var bool|null $userForcePasswordChangeOnLogonEnabled The userForcePasswordChangeOnLogonEnabled property
    */
    private ?bool $userForcePasswordChangeOnLogonEnabled = null;
    
    /**
     * @var bool|null $userWritebackEnabled The userWritebackEnabled property
    */
    private ?bool $userWritebackEnabled = null;
    
    /**
     * Instantiates a new onPremisesDirectorySynchronizationFeature and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.onPremisesDirectorySynchronizationFeature');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesDirectorySynchronizationFeature
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesDirectorySynchronizationFeature {
        return new OnPremisesDirectorySynchronizationFeature();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the blockCloudObjectTakeoverThroughHardMatchEnabled property value. The blockCloudObjectTakeoverThroughHardMatchEnabled property
     * @return bool|null
    */
    public function getBlockCloudObjectTakeoverThroughHardMatchEnabled(): ?bool {
        return $this->blockCloudObjectTakeoverThroughHardMatchEnabled;
    }

    /**
     * Gets the blockSoftMatchEnabled property value. The blockSoftMatchEnabled property
     * @return bool|null
    */
    public function getBlockSoftMatchEnabled(): ?bool {
        return $this->blockSoftMatchEnabled;
    }

    /**
     * Gets the bypassDirSyncOverridesEnabled property value. The bypassDirSyncOverridesEnabled property
     * @return bool|null
    */
    public function getBypassDirSyncOverridesEnabled(): ?bool {
        return $this->bypassDirSyncOverridesEnabled;
    }

    /**
     * Gets the cloudPasswordPolicyForPasswordSyncedUsersEnabled property value. The cloudPasswordPolicyForPasswordSyncedUsersEnabled property
     * @return bool|null
    */
    public function getCloudPasswordPolicyForPasswordSyncedUsersEnabled(): ?bool {
        return $this->cloudPasswordPolicyForPasswordSyncedUsersEnabled;
    }

    /**
     * Gets the concurrentCredentialUpdateEnabled property value. The concurrentCredentialUpdateEnabled property
     * @return bool|null
    */
    public function getConcurrentCredentialUpdateEnabled(): ?bool {
        return $this->concurrentCredentialUpdateEnabled;
    }

    /**
     * Gets the concurrentOrgIdProvisioningEnabled property value. The concurrentOrgIdProvisioningEnabled property
     * @return bool|null
    */
    public function getConcurrentOrgIdProvisioningEnabled(): ?bool {
        return $this->concurrentOrgIdProvisioningEnabled;
    }

    /**
     * Gets the deviceWritebackEnabled property value. The deviceWritebackEnabled property
     * @return bool|null
    */
    public function getDeviceWritebackEnabled(): ?bool {
        return $this->deviceWritebackEnabled;
    }

    /**
     * Gets the directoryExtensionsEnabled property value. The directoryExtensionsEnabled property
     * @return bool|null
    */
    public function getDirectoryExtensionsEnabled(): ?bool {
        return $this->directoryExtensionsEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockCloudObjectTakeoverThroughHardMatchEnabled' => fn(ParseNode $n) => $o->setBlockCloudObjectTakeoverThroughHardMatchEnabled($n->getBooleanValue()),
            'blockSoftMatchEnabled' => fn(ParseNode $n) => $o->setBlockSoftMatchEnabled($n->getBooleanValue()),
            'bypassDirSyncOverridesEnabled' => fn(ParseNode $n) => $o->setBypassDirSyncOverridesEnabled($n->getBooleanValue()),
            'cloudPasswordPolicyForPasswordSyncedUsersEnabled' => fn(ParseNode $n) => $o->setCloudPasswordPolicyForPasswordSyncedUsersEnabled($n->getBooleanValue()),
            'concurrentCredentialUpdateEnabled' => fn(ParseNode $n) => $o->setConcurrentCredentialUpdateEnabled($n->getBooleanValue()),
            'concurrentOrgIdProvisioningEnabled' => fn(ParseNode $n) => $o->setConcurrentOrgIdProvisioningEnabled($n->getBooleanValue()),
            'deviceWritebackEnabled' => fn(ParseNode $n) => $o->setDeviceWritebackEnabled($n->getBooleanValue()),
            'directoryExtensionsEnabled' => fn(ParseNode $n) => $o->setDirectoryExtensionsEnabled($n->getBooleanValue()),
            'fopeConflictResolutionEnabled' => fn(ParseNode $n) => $o->setFopeConflictResolutionEnabled($n->getBooleanValue()),
            'groupWriteBackEnabled' => fn(ParseNode $n) => $o->setGroupWriteBackEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'passwordSyncEnabled' => fn(ParseNode $n) => $o->setPasswordSyncEnabled($n->getBooleanValue()),
            'passwordWritebackEnabled' => fn(ParseNode $n) => $o->setPasswordWritebackEnabled($n->getBooleanValue()),
            'quarantineUponProxyAddressesConflictEnabled' => fn(ParseNode $n) => $o->setQuarantineUponProxyAddressesConflictEnabled($n->getBooleanValue()),
            'quarantineUponUpnConflictEnabled' => fn(ParseNode $n) => $o->setQuarantineUponUpnConflictEnabled($n->getBooleanValue()),
            'softMatchOnUpnEnabled' => fn(ParseNode $n) => $o->setSoftMatchOnUpnEnabled($n->getBooleanValue()),
            'synchronizeUpnForManagedUsersEnabled' => fn(ParseNode $n) => $o->setSynchronizeUpnForManagedUsersEnabled($n->getBooleanValue()),
            'unifiedGroupWritebackEnabled' => fn(ParseNode $n) => $o->setUnifiedGroupWritebackEnabled($n->getBooleanValue()),
            'userForcePasswordChangeOnLogonEnabled' => fn(ParseNode $n) => $o->setUserForcePasswordChangeOnLogonEnabled($n->getBooleanValue()),
            'userWritebackEnabled' => fn(ParseNode $n) => $o->setUserWritebackEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the fopeConflictResolutionEnabled property value. The fopeConflictResolutionEnabled property
     * @return bool|null
    */
    public function getFopeConflictResolutionEnabled(): ?bool {
        return $this->fopeConflictResolutionEnabled;
    }

    /**
     * Gets the groupWriteBackEnabled property value. The groupWriteBackEnabled property
     * @return bool|null
    */
    public function getGroupWriteBackEnabled(): ?bool {
        return $this->groupWriteBackEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the passwordSyncEnabled property value. The passwordSyncEnabled property
     * @return bool|null
    */
    public function getPasswordSyncEnabled(): ?bool {
        return $this->passwordSyncEnabled;
    }

    /**
     * Gets the passwordWritebackEnabled property value. The passwordWritebackEnabled property
     * @return bool|null
    */
    public function getPasswordWritebackEnabled(): ?bool {
        return $this->passwordWritebackEnabled;
    }

    /**
     * Gets the quarantineUponProxyAddressesConflictEnabled property value. The quarantineUponProxyAddressesConflictEnabled property
     * @return bool|null
    */
    public function getQuarantineUponProxyAddressesConflictEnabled(): ?bool {
        return $this->quarantineUponProxyAddressesConflictEnabled;
    }

    /**
     * Gets the quarantineUponUpnConflictEnabled property value. The quarantineUponUpnConflictEnabled property
     * @return bool|null
    */
    public function getQuarantineUponUpnConflictEnabled(): ?bool {
        return $this->quarantineUponUpnConflictEnabled;
    }

    /**
     * Gets the softMatchOnUpnEnabled property value. The softMatchOnUpnEnabled property
     * @return bool|null
    */
    public function getSoftMatchOnUpnEnabled(): ?bool {
        return $this->softMatchOnUpnEnabled;
    }

    /**
     * Gets the synchronizeUpnForManagedUsersEnabled property value. The synchronizeUpnForManagedUsersEnabled property
     * @return bool|null
    */
    public function getSynchronizeUpnForManagedUsersEnabled(): ?bool {
        return $this->synchronizeUpnForManagedUsersEnabled;
    }

    /**
     * Gets the unifiedGroupWritebackEnabled property value. The unifiedGroupWritebackEnabled property
     * @return bool|null
    */
    public function getUnifiedGroupWritebackEnabled(): ?bool {
        return $this->unifiedGroupWritebackEnabled;
    }

    /**
     * Gets the userForcePasswordChangeOnLogonEnabled property value. The userForcePasswordChangeOnLogonEnabled property
     * @return bool|null
    */
    public function getUserForcePasswordChangeOnLogonEnabled(): ?bool {
        return $this->userForcePasswordChangeOnLogonEnabled;
    }

    /**
     * Gets the userWritebackEnabled property value. The userWritebackEnabled property
     * @return bool|null
    */
    public function getUserWritebackEnabled(): ?bool {
        return $this->userWritebackEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('blockCloudObjectTakeoverThroughHardMatchEnabled', $this->blockCloudObjectTakeoverThroughHardMatchEnabled);
        $writer->writeBooleanValue('blockSoftMatchEnabled', $this->blockSoftMatchEnabled);
        $writer->writeBooleanValue('bypassDirSyncOverridesEnabled', $this->bypassDirSyncOverridesEnabled);
        $writer->writeBooleanValue('cloudPasswordPolicyForPasswordSyncedUsersEnabled', $this->cloudPasswordPolicyForPasswordSyncedUsersEnabled);
        $writer->writeBooleanValue('concurrentCredentialUpdateEnabled', $this->concurrentCredentialUpdateEnabled);
        $writer->writeBooleanValue('concurrentOrgIdProvisioningEnabled', $this->concurrentOrgIdProvisioningEnabled);
        $writer->writeBooleanValue('deviceWritebackEnabled', $this->deviceWritebackEnabled);
        $writer->writeBooleanValue('directoryExtensionsEnabled', $this->directoryExtensionsEnabled);
        $writer->writeBooleanValue('fopeConflictResolutionEnabled', $this->fopeConflictResolutionEnabled);
        $writer->writeBooleanValue('groupWriteBackEnabled', $this->groupWriteBackEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('passwordSyncEnabled', $this->passwordSyncEnabled);
        $writer->writeBooleanValue('passwordWritebackEnabled', $this->passwordWritebackEnabled);
        $writer->writeBooleanValue('quarantineUponProxyAddressesConflictEnabled', $this->quarantineUponProxyAddressesConflictEnabled);
        $writer->writeBooleanValue('quarantineUponUpnConflictEnabled', $this->quarantineUponUpnConflictEnabled);
        $writer->writeBooleanValue('softMatchOnUpnEnabled', $this->softMatchOnUpnEnabled);
        $writer->writeBooleanValue('synchronizeUpnForManagedUsersEnabled', $this->synchronizeUpnForManagedUsersEnabled);
        $writer->writeBooleanValue('unifiedGroupWritebackEnabled', $this->unifiedGroupWritebackEnabled);
        $writer->writeBooleanValue('userForcePasswordChangeOnLogonEnabled', $this->userForcePasswordChangeOnLogonEnabled);
        $writer->writeBooleanValue('userWritebackEnabled', $this->userWritebackEnabled);
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
     * Sets the blockCloudObjectTakeoverThroughHardMatchEnabled property value. The blockCloudObjectTakeoverThroughHardMatchEnabled property
     *  @param bool|null $value Value to set for the blockCloudObjectTakeoverThroughHardMatchEnabled property.
    */
    public function setBlockCloudObjectTakeoverThroughHardMatchEnabled(?bool $value ): void {
        $this->blockCloudObjectTakeoverThroughHardMatchEnabled = $value;
    }

    /**
     * Sets the blockSoftMatchEnabled property value. The blockSoftMatchEnabled property
     *  @param bool|null $value Value to set for the blockSoftMatchEnabled property.
    */
    public function setBlockSoftMatchEnabled(?bool $value ): void {
        $this->blockSoftMatchEnabled = $value;
    }

    /**
     * Sets the bypassDirSyncOverridesEnabled property value. The bypassDirSyncOverridesEnabled property
     *  @param bool|null $value Value to set for the bypassDirSyncOverridesEnabled property.
    */
    public function setBypassDirSyncOverridesEnabled(?bool $value ): void {
        $this->bypassDirSyncOverridesEnabled = $value;
    }

    /**
     * Sets the cloudPasswordPolicyForPasswordSyncedUsersEnabled property value. The cloudPasswordPolicyForPasswordSyncedUsersEnabled property
     *  @param bool|null $value Value to set for the cloudPasswordPolicyForPasswordSyncedUsersEnabled property.
    */
    public function setCloudPasswordPolicyForPasswordSyncedUsersEnabled(?bool $value ): void {
        $this->cloudPasswordPolicyForPasswordSyncedUsersEnabled = $value;
    }

    /**
     * Sets the concurrentCredentialUpdateEnabled property value. The concurrentCredentialUpdateEnabled property
     *  @param bool|null $value Value to set for the concurrentCredentialUpdateEnabled property.
    */
    public function setConcurrentCredentialUpdateEnabled(?bool $value ): void {
        $this->concurrentCredentialUpdateEnabled = $value;
    }

    /**
     * Sets the concurrentOrgIdProvisioningEnabled property value. The concurrentOrgIdProvisioningEnabled property
     *  @param bool|null $value Value to set for the concurrentOrgIdProvisioningEnabled property.
    */
    public function setConcurrentOrgIdProvisioningEnabled(?bool $value ): void {
        $this->concurrentOrgIdProvisioningEnabled = $value;
    }

    /**
     * Sets the deviceWritebackEnabled property value. The deviceWritebackEnabled property
     *  @param bool|null $value Value to set for the deviceWritebackEnabled property.
    */
    public function setDeviceWritebackEnabled(?bool $value ): void {
        $this->deviceWritebackEnabled = $value;
    }

    /**
     * Sets the directoryExtensionsEnabled property value. The directoryExtensionsEnabled property
     *  @param bool|null $value Value to set for the directoryExtensionsEnabled property.
    */
    public function setDirectoryExtensionsEnabled(?bool $value ): void {
        $this->directoryExtensionsEnabled = $value;
    }

    /**
     * Sets the fopeConflictResolutionEnabled property value. The fopeConflictResolutionEnabled property
     *  @param bool|null $value Value to set for the fopeConflictResolutionEnabled property.
    */
    public function setFopeConflictResolutionEnabled(?bool $value ): void {
        $this->fopeConflictResolutionEnabled = $value;
    }

    /**
     * Sets the groupWriteBackEnabled property value. The groupWriteBackEnabled property
     *  @param bool|null $value Value to set for the groupWriteBackEnabled property.
    */
    public function setGroupWriteBackEnabled(?bool $value ): void {
        $this->groupWriteBackEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the passwordSyncEnabled property value. The passwordSyncEnabled property
     *  @param bool|null $value Value to set for the passwordSyncEnabled property.
    */
    public function setPasswordSyncEnabled(?bool $value ): void {
        $this->passwordSyncEnabled = $value;
    }

    /**
     * Sets the passwordWritebackEnabled property value. The passwordWritebackEnabled property
     *  @param bool|null $value Value to set for the passwordWritebackEnabled property.
    */
    public function setPasswordWritebackEnabled(?bool $value ): void {
        $this->passwordWritebackEnabled = $value;
    }

    /**
     * Sets the quarantineUponProxyAddressesConflictEnabled property value. The quarantineUponProxyAddressesConflictEnabled property
     *  @param bool|null $value Value to set for the quarantineUponProxyAddressesConflictEnabled property.
    */
    public function setQuarantineUponProxyAddressesConflictEnabled(?bool $value ): void {
        $this->quarantineUponProxyAddressesConflictEnabled = $value;
    }

    /**
     * Sets the quarantineUponUpnConflictEnabled property value. The quarantineUponUpnConflictEnabled property
     *  @param bool|null $value Value to set for the quarantineUponUpnConflictEnabled property.
    */
    public function setQuarantineUponUpnConflictEnabled(?bool $value ): void {
        $this->quarantineUponUpnConflictEnabled = $value;
    }

    /**
     * Sets the softMatchOnUpnEnabled property value. The softMatchOnUpnEnabled property
     *  @param bool|null $value Value to set for the softMatchOnUpnEnabled property.
    */
    public function setSoftMatchOnUpnEnabled(?bool $value ): void {
        $this->softMatchOnUpnEnabled = $value;
    }

    /**
     * Sets the synchronizeUpnForManagedUsersEnabled property value. The synchronizeUpnForManagedUsersEnabled property
     *  @param bool|null $value Value to set for the synchronizeUpnForManagedUsersEnabled property.
    */
    public function setSynchronizeUpnForManagedUsersEnabled(?bool $value ): void {
        $this->synchronizeUpnForManagedUsersEnabled = $value;
    }

    /**
     * Sets the unifiedGroupWritebackEnabled property value. The unifiedGroupWritebackEnabled property
     *  @param bool|null $value Value to set for the unifiedGroupWritebackEnabled property.
    */
    public function setUnifiedGroupWritebackEnabled(?bool $value ): void {
        $this->unifiedGroupWritebackEnabled = $value;
    }

    /**
     * Sets the userForcePasswordChangeOnLogonEnabled property value. The userForcePasswordChangeOnLogonEnabled property
     *  @param bool|null $value Value to set for the userForcePasswordChangeOnLogonEnabled property.
    */
    public function setUserForcePasswordChangeOnLogonEnabled(?bool $value ): void {
        $this->userForcePasswordChangeOnLogonEnabled = $value;
    }

    /**
     * Sets the userWritebackEnabled property value. The userWritebackEnabled property
     *  @param bool|null $value Value to set for the userWritebackEnabled property.
    */
    public function setUserWritebackEnabled(?bool $value ): void {
        $this->userWritebackEnabled = $value;
    }

}
