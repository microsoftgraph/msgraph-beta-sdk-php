<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcPartnerAgentInstallResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcPartnerAgentInstallResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcPartnerAgentInstallResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcPartnerAgentInstallResult {
        return new CloudPcPartnerAgentInstallResult();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the errorMessage property value. Contains a detailed error message when the partner agent installation failed.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        $val = $this->getBackingStore()->get('errorMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorMessage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorMessage' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            'installStatus' => fn(ParseNode $n) => $o->setInstallStatus($n->getEnumValue(CloudPcPartnerAgentInstallStatus::class)),
            'isThirdPartyPartner' => fn(ParseNode $n) => $o->setIsThirdPartyPartner($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'partnerAgentName' => fn(ParseNode $n) => $o->setPartnerAgentName($n->getEnumValue(CloudPcPartnerAgentName::class)),
            'retriable' => fn(ParseNode $n) => $o->setRetriable($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the installStatus property value. The status of a partner agent installation. Possible values are: installed, installFailed, installing, uninstalling, uninstallFailed and licensed. Read-Only.
     * @return CloudPcPartnerAgentInstallStatus|null
    */
    public function getInstallStatus(): ?CloudPcPartnerAgentInstallStatus {
        $val = $this->getBackingStore()->get('installStatus');
        if (is_null($val) || $val instanceof CloudPcPartnerAgentInstallStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installStatus'");
    }

    /**
     * Gets the isThirdPartyPartner property value. Indicates whether the partner agent is a third party. When true, the agent is a third-party (non-Microsoft) agent and when false, the agent is a Microsoft agent or isn't known.  The default value is false.
     * @return bool|null
    */
    public function getIsThirdPartyPartner(): ?bool {
        $val = $this->getBackingStore()->get('isThirdPartyPartner');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isThirdPartyPartner'");
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
     * Gets the partnerAgentName property value. The name of the first-party or third-party partner agent. Possible values for third-party partners are Citrix, VMware and HP. Read-Only.
     * @return CloudPcPartnerAgentName|null
    */
    public function getPartnerAgentName(): ?CloudPcPartnerAgentName {
        $val = $this->getBackingStore()->get('partnerAgentName');
        if (is_null($val) || $val instanceof CloudPcPartnerAgentName) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerAgentName'");
    }

    /**
     * Gets the retriable property value. Indicates whether the partner agent installation should be retried. The default value is false.
     * @return bool|null
    */
    public function getRetriable(): ?bool {
        $val = $this->getBackingStore()->get('retriable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retriable'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('errorMessage', $this->getErrorMessage());
        $writer->writeEnumValue('installStatus', $this->getInstallStatus());
        $writer->writeBooleanValue('isThirdPartyPartner', $this->getIsThirdPartyPartner());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('partnerAgentName', $this->getPartnerAgentName());
        $writer->writeBooleanValue('retriable', $this->getRetriable());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the errorMessage property value. Contains a detailed error message when the partner agent installation failed.
     * @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value): void {
        $this->getBackingStore()->set('errorMessage', $value);
    }

    /**
     * Sets the installStatus property value. The status of a partner agent installation. Possible values are: installed, installFailed, installing, uninstalling, uninstallFailed and licensed. Read-Only.
     * @param CloudPcPartnerAgentInstallStatus|null $value Value to set for the installStatus property.
    */
    public function setInstallStatus(?CloudPcPartnerAgentInstallStatus $value): void {
        $this->getBackingStore()->set('installStatus', $value);
    }

    /**
     * Sets the isThirdPartyPartner property value. Indicates whether the partner agent is a third party. When true, the agent is a third-party (non-Microsoft) agent and when false, the agent is a Microsoft agent or isn't known.  The default value is false.
     * @param bool|null $value Value to set for the isThirdPartyPartner property.
    */
    public function setIsThirdPartyPartner(?bool $value): void {
        $this->getBackingStore()->set('isThirdPartyPartner', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the partnerAgentName property value. The name of the first-party or third-party partner agent. Possible values for third-party partners are Citrix, VMware and HP. Read-Only.
     * @param CloudPcPartnerAgentName|null $value Value to set for the partnerAgentName property.
    */
    public function setPartnerAgentName(?CloudPcPartnerAgentName $value): void {
        $this->getBackingStore()->set('partnerAgentName', $value);
    }

    /**
     * Sets the retriable property value. Indicates whether the partner agent installation should be retried. The default value is false.
     * @param bool|null $value Value to set for the retriable property.
    */
    public function setRetriable(?bool $value): void {
        $this->getBackingStore()->set('retriable', $value);
    }

}
