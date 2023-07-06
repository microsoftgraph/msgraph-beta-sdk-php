<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesCurrentExportData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesCurrentExportData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesCurrentExportData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesCurrentExportData {
        return new OnPremisesCurrentExportData();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientMachineName property value. The name of the onPremises client machine which ran the last export.
     * @return string|null
    */
    public function getClientMachineName(): ?string {
        $val = $this->getBackingStore()->get('clientMachineName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientMachineName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientMachineName' => fn(ParseNode $n) => $o->setClientMachineName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pendingObjectsAddition' => fn(ParseNode $n) => $o->setPendingObjectsAddition($n->getIntegerValue()),
            'pendingObjectsDeletion' => fn(ParseNode $n) => $o->setPendingObjectsDeletion($n->getIntegerValue()),
            'pendingObjectsUpdate' => fn(ParseNode $n) => $o->setPendingObjectsUpdate($n->getIntegerValue()),
            'serviceAccount' => fn(ParseNode $n) => $o->setServiceAccount($n->getStringValue()),
            'successfulLinksProvisioningCount' => fn(ParseNode $n) => $o->setSuccessfulLinksProvisioningCount($n->getIntegerValue()),
            'successfulObjectsProvisioningCount' => fn(ParseNode $n) => $o->setSuccessfulObjectsProvisioningCount($n->getIntegerValue()),
            'totalConnectorSpaceObjects' => fn(ParseNode $n) => $o->setTotalConnectorSpaceObjects($n->getIntegerValue()),
        ];
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
     * Gets the pendingObjectsAddition property value. The count of pending adds from on-premises directory.
     * @return int|null
    */
    public function getPendingObjectsAddition(): ?int {
        $val = $this->getBackingStore()->get('pendingObjectsAddition');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingObjectsAddition'");
    }

    /**
     * Gets the pendingObjectsDeletion property value. The count of pending deletes from on-premises directory.
     * @return int|null
    */
    public function getPendingObjectsDeletion(): ?int {
        $val = $this->getBackingStore()->get('pendingObjectsDeletion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingObjectsDeletion'");
    }

    /**
     * Gets the pendingObjectsUpdate property value. The count of pending updates from on-premises directory.
     * @return int|null
    */
    public function getPendingObjectsUpdate(): ?int {
        $val = $this->getBackingStore()->get('pendingObjectsUpdate');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingObjectsUpdate'");
    }

    /**
     * Gets the serviceAccount property value. The name of the dirsync service account which is configured to connect to the directory.
     * @return string|null
    */
    public function getServiceAccount(): ?string {
        $val = $this->getBackingStore()->get('serviceAccount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceAccount'");
    }

    /**
     * Gets the successfulLinksProvisioningCount property value. The count of updated links during the current directory sync export run.
     * @return int|null
    */
    public function getSuccessfulLinksProvisioningCount(): ?int {
        $val = $this->getBackingStore()->get('successfulLinksProvisioningCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulLinksProvisioningCount'");
    }

    /**
     * Gets the successfulObjectsProvisioningCount property value. The count of objects which were successfully provisioned during the current directory sync export run.
     * @return int|null
    */
    public function getSuccessfulObjectsProvisioningCount(): ?int {
        $val = $this->getBackingStore()->get('successfulObjectsProvisioningCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulObjectsProvisioningCount'");
    }

    /**
     * Gets the totalConnectorSpaceObjects property value. The total number of objects in the AAD Connector Space.
     * @return int|null
    */
    public function getTotalConnectorSpaceObjects(): ?int {
        $val = $this->getBackingStore()->get('totalConnectorSpaceObjects');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalConnectorSpaceObjects'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientMachineName', $this->getClientMachineName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pendingObjectsAddition', $this->getPendingObjectsAddition());
        $writer->writeIntegerValue('pendingObjectsDeletion', $this->getPendingObjectsDeletion());
        $writer->writeIntegerValue('pendingObjectsUpdate', $this->getPendingObjectsUpdate());
        $writer->writeStringValue('serviceAccount', $this->getServiceAccount());
        $writer->writeIntegerValue('successfulLinksProvisioningCount', $this->getSuccessfulLinksProvisioningCount());
        $writer->writeIntegerValue('successfulObjectsProvisioningCount', $this->getSuccessfulObjectsProvisioningCount());
        $writer->writeIntegerValue('totalConnectorSpaceObjects', $this->getTotalConnectorSpaceObjects());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientMachineName property value. The name of the onPremises client machine which ran the last export.
     * @param string|null $value Value to set for the clientMachineName property.
    */
    public function setClientMachineName(?string $value): void {
        $this->getBackingStore()->set('clientMachineName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pendingObjectsAddition property value. The count of pending adds from on-premises directory.
     * @param int|null $value Value to set for the pendingObjectsAddition property.
    */
    public function setPendingObjectsAddition(?int $value): void {
        $this->getBackingStore()->set('pendingObjectsAddition', $value);
    }

    /**
     * Sets the pendingObjectsDeletion property value. The count of pending deletes from on-premises directory.
     * @param int|null $value Value to set for the pendingObjectsDeletion property.
    */
    public function setPendingObjectsDeletion(?int $value): void {
        $this->getBackingStore()->set('pendingObjectsDeletion', $value);
    }

    /**
     * Sets the pendingObjectsUpdate property value. The count of pending updates from on-premises directory.
     * @param int|null $value Value to set for the pendingObjectsUpdate property.
    */
    public function setPendingObjectsUpdate(?int $value): void {
        $this->getBackingStore()->set('pendingObjectsUpdate', $value);
    }

    /**
     * Sets the serviceAccount property value. The name of the dirsync service account which is configured to connect to the directory.
     * @param string|null $value Value to set for the serviceAccount property.
    */
    public function setServiceAccount(?string $value): void {
        $this->getBackingStore()->set('serviceAccount', $value);
    }

    /**
     * Sets the successfulLinksProvisioningCount property value. The count of updated links during the current directory sync export run.
     * @param int|null $value Value to set for the successfulLinksProvisioningCount property.
    */
    public function setSuccessfulLinksProvisioningCount(?int $value): void {
        $this->getBackingStore()->set('successfulLinksProvisioningCount', $value);
    }

    /**
     * Sets the successfulObjectsProvisioningCount property value. The count of objects which were successfully provisioned during the current directory sync export run.
     * @param int|null $value Value to set for the successfulObjectsProvisioningCount property.
    */
    public function setSuccessfulObjectsProvisioningCount(?int $value): void {
        $this->getBackingStore()->set('successfulObjectsProvisioningCount', $value);
    }

    /**
     * Sets the totalConnectorSpaceObjects property value. The total number of objects in the AAD Connector Space.
     * @param int|null $value Value to set for the totalConnectorSpaceObjects property.
    */
    public function setTotalConnectorSpaceObjects(?int $value): void {
        $this->getBackingStore()->set('totalConnectorSpaceObjects', $value);
    }

}
