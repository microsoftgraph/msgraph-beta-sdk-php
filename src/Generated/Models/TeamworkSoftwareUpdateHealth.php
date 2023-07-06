<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkSoftwareUpdateHealth implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkSoftwareUpdateHealth and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkSoftwareUpdateHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkSoftwareUpdateHealth {
        return new TeamworkSoftwareUpdateHealth();
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
     * Gets the adminAgentSoftwareUpdateStatus property value. The software update available for the admin agent.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getAdminAgentSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        $val = $this->getBackingStore()->get('adminAgentSoftwareUpdateStatus');
        if (is_null($val) || $val instanceof TeamworkSoftwareUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminAgentSoftwareUpdateStatus'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the companyPortalSoftwareUpdateStatus property value. The software update available for the company portal.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getCompanyPortalSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        $val = $this->getBackingStore()->get('companyPortalSoftwareUpdateStatus');
        if (is_null($val) || $val instanceof TeamworkSoftwareUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyPortalSoftwareUpdateStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminAgentSoftwareUpdateStatus' => fn(ParseNode $n) => $o->setAdminAgentSoftwareUpdateStatus($n->getObjectValue([TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'])),
            'companyPortalSoftwareUpdateStatus' => fn(ParseNode $n) => $o->setCompanyPortalSoftwareUpdateStatus($n->getObjectValue([TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'])),
            'firmwareSoftwareUpdateStatus' => fn(ParseNode $n) => $o->setFirmwareSoftwareUpdateStatus($n->getObjectValue([TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatingSystemSoftwareUpdateStatus' => fn(ParseNode $n) => $o->setOperatingSystemSoftwareUpdateStatus($n->getObjectValue([TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'])),
            'partnerAgentSoftwareUpdateStatus' => fn(ParseNode $n) => $o->setPartnerAgentSoftwareUpdateStatus($n->getObjectValue([TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'])),
            'teamsClientSoftwareUpdateStatus' => fn(ParseNode $n) => $o->setTeamsClientSoftwareUpdateStatus($n->getObjectValue([TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the firmwareSoftwareUpdateStatus property value. The software update available for the firmware.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getFirmwareSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        $val = $this->getBackingStore()->get('firmwareSoftwareUpdateStatus');
        if (is_null($val) || $val instanceof TeamworkSoftwareUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firmwareSoftwareUpdateStatus'");
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
     * Gets the operatingSystemSoftwareUpdateStatus property value. The software update available for the operating system.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getOperatingSystemSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        $val = $this->getBackingStore()->get('operatingSystemSoftwareUpdateStatus');
        if (is_null($val) || $val instanceof TeamworkSoftwareUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemSoftwareUpdateStatus'");
    }

    /**
     * Gets the partnerAgentSoftwareUpdateStatus property value. The software update available for the partner agent.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getPartnerAgentSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        $val = $this->getBackingStore()->get('partnerAgentSoftwareUpdateStatus');
        if (is_null($val) || $val instanceof TeamworkSoftwareUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerAgentSoftwareUpdateStatus'");
    }

    /**
     * Gets the teamsClientSoftwareUpdateStatus property value. The software update available for the Teams client.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getTeamsClientSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        $val = $this->getBackingStore()->get('teamsClientSoftwareUpdateStatus');
        if (is_null($val) || $val instanceof TeamworkSoftwareUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsClientSoftwareUpdateStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adminAgentSoftwareUpdateStatus', $this->getAdminAgentSoftwareUpdateStatus());
        $writer->writeObjectValue('companyPortalSoftwareUpdateStatus', $this->getCompanyPortalSoftwareUpdateStatus());
        $writer->writeObjectValue('firmwareSoftwareUpdateStatus', $this->getFirmwareSoftwareUpdateStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('operatingSystemSoftwareUpdateStatus', $this->getOperatingSystemSoftwareUpdateStatus());
        $writer->writeObjectValue('partnerAgentSoftwareUpdateStatus', $this->getPartnerAgentSoftwareUpdateStatus());
        $writer->writeObjectValue('teamsClientSoftwareUpdateStatus', $this->getTeamsClientSoftwareUpdateStatus());
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
     * Sets the adminAgentSoftwareUpdateStatus property value. The software update available for the admin agent.
     * @param TeamworkSoftwareUpdateStatus|null $value Value to set for the adminAgentSoftwareUpdateStatus property.
    */
    public function setAdminAgentSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value): void {
        $this->getBackingStore()->set('adminAgentSoftwareUpdateStatus', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the companyPortalSoftwareUpdateStatus property value. The software update available for the company portal.
     * @param TeamworkSoftwareUpdateStatus|null $value Value to set for the companyPortalSoftwareUpdateStatus property.
    */
    public function setCompanyPortalSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value): void {
        $this->getBackingStore()->set('companyPortalSoftwareUpdateStatus', $value);
    }

    /**
     * Sets the firmwareSoftwareUpdateStatus property value. The software update available for the firmware.
     * @param TeamworkSoftwareUpdateStatus|null $value Value to set for the firmwareSoftwareUpdateStatus property.
    */
    public function setFirmwareSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value): void {
        $this->getBackingStore()->set('firmwareSoftwareUpdateStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatingSystemSoftwareUpdateStatus property value. The software update available for the operating system.
     * @param TeamworkSoftwareUpdateStatus|null $value Value to set for the operatingSystemSoftwareUpdateStatus property.
    */
    public function setOperatingSystemSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value): void {
        $this->getBackingStore()->set('operatingSystemSoftwareUpdateStatus', $value);
    }

    /**
     * Sets the partnerAgentSoftwareUpdateStatus property value. The software update available for the partner agent.
     * @param TeamworkSoftwareUpdateStatus|null $value Value to set for the partnerAgentSoftwareUpdateStatus property.
    */
    public function setPartnerAgentSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value): void {
        $this->getBackingStore()->set('partnerAgentSoftwareUpdateStatus', $value);
    }

    /**
     * Sets the teamsClientSoftwareUpdateStatus property value. The software update available for the Teams client.
     * @param TeamworkSoftwareUpdateStatus|null $value Value to set for the teamsClientSoftwareUpdateStatus property.
    */
    public function setTeamsClientSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value): void {
        $this->getBackingStore()->set('teamsClientSoftwareUpdateStatus', $value);
    }

}
