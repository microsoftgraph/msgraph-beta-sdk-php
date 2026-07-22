<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ImpactedAssetsCounts implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ImpactedAssetsCounts and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImpactedAssetsCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImpactedAssetsCounts {
        return new ImpactedAssetsCounts();
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
     * Gets the aiAgents property value. The number of impacted AI agents.
     * @return int|null
    */
    public function getAiAgents(): ?int {
        $val = $this->getBackingStore()->get('aiAgents');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aiAgents'");
    }

    /**
     * Gets the apps property value. The number of impacted apps.
     * @return int|null
    */
    public function getApps(): ?int {
        $val = $this->getBackingStore()->get('apps');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apps'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cloudResources property value. The number of impacted cloud resources.
     * @return int|null
    */
    public function getCloudResources(): ?int {
        $val = $this->getBackingStore()->get('cloudResources');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudResources'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aiAgents' => fn(ParseNode $n) => $o->setAiAgents($n->getIntegerValue()),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getIntegerValue()),
            'cloudResources' => fn(ParseNode $n) => $o->setCloudResources($n->getIntegerValue()),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getIntegerValue()),
            'ips' => fn(ParseNode $n) => $o->setIps($n->getIntegerValue()),
            'machines' => fn(ParseNode $n) => $o->setMachines($n->getIntegerValue()),
            'mailboxes' => fn(ParseNode $n) => $o->setMailboxes($n->getIntegerValue()),
            'oauthApps' => fn(ParseNode $n) => $o->setOauthApps($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processes' => fn(ParseNode $n) => $o->setProcesses($n->getIntegerValue()),
            'registryKeys' => fn(ParseNode $n) => $o->setRegistryKeys($n->getIntegerValue()),
            'securityGroups' => fn(ParseNode $n) => $o->setSecurityGroups($n->getIntegerValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'urls' => fn(ParseNode $n) => $o->setUrls($n->getIntegerValue()),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the files property value. The number of impacted files.
     * @return int|null
    */
    public function getFiles(): ?int {
        $val = $this->getBackingStore()->get('files');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'files'");
    }

    /**
     * Gets the ips property value. The number of impacted IP addresses.
     * @return int|null
    */
    public function getIps(): ?int {
        $val = $this->getBackingStore()->get('ips');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ips'");
    }

    /**
     * Gets the machines property value. The number of impacted machines.
     * @return int|null
    */
    public function getMachines(): ?int {
        $val = $this->getBackingStore()->get('machines');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machines'");
    }

    /**
     * Gets the mailboxes property value. The number of impacted mailboxes.
     * @return int|null
    */
    public function getMailboxes(): ?int {
        $val = $this->getBackingStore()->get('mailboxes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxes'");
    }

    /**
     * Gets the oauthApps property value. The number of impacted OAuth apps.
     * @return int|null
    */
    public function getOauthApps(): ?int {
        $val = $this->getBackingStore()->get('oauthApps');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oauthApps'");
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
     * Gets the processes property value. The number of impacted processes.
     * @return int|null
    */
    public function getProcesses(): ?int {
        $val = $this->getBackingStore()->get('processes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processes'");
    }

    /**
     * Gets the registryKeys property value. The number of impacted registry keys.
     * @return int|null
    */
    public function getRegistryKeys(): ?int {
        $val = $this->getBackingStore()->get('registryKeys');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registryKeys'");
    }

    /**
     * Gets the securityGroups property value. The number of impacted security groups.
     * @return int|null
    */
    public function getSecurityGroups(): ?int {
        $val = $this->getBackingStore()->get('securityGroups');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityGroups'");
    }

    /**
     * Gets the total property value. The total number of impacted assets.
     * @return int|null
    */
    public function getTotal(): ?int {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
    }

    /**
     * Gets the urls property value. The number of impacted URLs.
     * @return int|null
    */
    public function getUrls(): ?int {
        $val = $this->getBackingStore()->get('urls');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urls'");
    }

    /**
     * Gets the users property value. The number of impacted users.
     * @return int|null
    */
    public function getUsers(): ?int {
        $val = $this->getBackingStore()->get('users');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'users'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('aiAgents', $this->getAiAgents());
        $writer->writeIntegerValue('apps', $this->getApps());
        $writer->writeIntegerValue('cloudResources', $this->getCloudResources());
        $writer->writeIntegerValue('files', $this->getFiles());
        $writer->writeIntegerValue('ips', $this->getIps());
        $writer->writeIntegerValue('machines', $this->getMachines());
        $writer->writeIntegerValue('mailboxes', $this->getMailboxes());
        $writer->writeIntegerValue('oauthApps', $this->getOauthApps());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('processes', $this->getProcesses());
        $writer->writeIntegerValue('registryKeys', $this->getRegistryKeys());
        $writer->writeIntegerValue('securityGroups', $this->getSecurityGroups());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeIntegerValue('urls', $this->getUrls());
        $writer->writeIntegerValue('users', $this->getUsers());
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
     * Sets the aiAgents property value. The number of impacted AI agents.
     * @param int|null $value Value to set for the aiAgents property.
    */
    public function setAiAgents(?int $value): void {
        $this->getBackingStore()->set('aiAgents', $value);
    }

    /**
     * Sets the apps property value. The number of impacted apps.
     * @param int|null $value Value to set for the apps property.
    */
    public function setApps(?int $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudResources property value. The number of impacted cloud resources.
     * @param int|null $value Value to set for the cloudResources property.
    */
    public function setCloudResources(?int $value): void {
        $this->getBackingStore()->set('cloudResources', $value);
    }

    /**
     * Sets the files property value. The number of impacted files.
     * @param int|null $value Value to set for the files property.
    */
    public function setFiles(?int $value): void {
        $this->getBackingStore()->set('files', $value);
    }

    /**
     * Sets the ips property value. The number of impacted IP addresses.
     * @param int|null $value Value to set for the ips property.
    */
    public function setIps(?int $value): void {
        $this->getBackingStore()->set('ips', $value);
    }

    /**
     * Sets the machines property value. The number of impacted machines.
     * @param int|null $value Value to set for the machines property.
    */
    public function setMachines(?int $value): void {
        $this->getBackingStore()->set('machines', $value);
    }

    /**
     * Sets the mailboxes property value. The number of impacted mailboxes.
     * @param int|null $value Value to set for the mailboxes property.
    */
    public function setMailboxes(?int $value): void {
        $this->getBackingStore()->set('mailboxes', $value);
    }

    /**
     * Sets the oauthApps property value. The number of impacted OAuth apps.
     * @param int|null $value Value to set for the oauthApps property.
    */
    public function setOauthApps(?int $value): void {
        $this->getBackingStore()->set('oauthApps', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the processes property value. The number of impacted processes.
     * @param int|null $value Value to set for the processes property.
    */
    public function setProcesses(?int $value): void {
        $this->getBackingStore()->set('processes', $value);
    }

    /**
     * Sets the registryKeys property value. The number of impacted registry keys.
     * @param int|null $value Value to set for the registryKeys property.
    */
    public function setRegistryKeys(?int $value): void {
        $this->getBackingStore()->set('registryKeys', $value);
    }

    /**
     * Sets the securityGroups property value. The number of impacted security groups.
     * @param int|null $value Value to set for the securityGroups property.
    */
    public function setSecurityGroups(?int $value): void {
        $this->getBackingStore()->set('securityGroups', $value);
    }

    /**
     * Sets the total property value. The total number of impacted assets.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->getBackingStore()->set('total', $value);
    }

    /**
     * Sets the urls property value. The number of impacted URLs.
     * @param int|null $value Value to set for the urls property.
    */
    public function setUrls(?int $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

    /**
     * Sets the users property value. The number of impacted users.
     * @param int|null $value Value to set for the users property.
    */
    public function setUsers(?int $value): void {
        $this->getBackingStore()->set('users', $value);
    }

}
