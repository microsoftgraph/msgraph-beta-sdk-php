<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TrainingCampaignReport implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TrainingCampaignReport and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrainingCampaignReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrainingCampaignReport {
        return new TrainingCampaignReport();
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
     * Gets the campaignUsers property value. The campaignUsers property
     * @return array<UserSimulationDetails>|null
    */
    public function getCampaignUsers(): ?array {
        $val = $this->getBackingStore()->get('campaignUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSimulationDetails::class);
            /** @var array<UserSimulationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'campaignUsers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'campaignUsers' => fn(ParseNode $n) => $o->setCampaignUsers($n->getCollectionOfObjectValues([UserSimulationDetails::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'overview' => fn(ParseNode $n) => $o->setOverview($n->getObjectValue([TrainingCampaignReportOverview::class, 'createFromDiscriminatorValue'])),
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
     * Gets the overview property value. The overview property
     * @return TrainingCampaignReportOverview|null
    */
    public function getOverview(): ?TrainingCampaignReportOverview {
        $val = $this->getBackingStore()->get('overview');
        if (is_null($val) || $val instanceof TrainingCampaignReportOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overview'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('campaignUsers', $this->getCampaignUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('overview', $this->getOverview());
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
     * Sets the campaignUsers property value. The campaignUsers property
     * @param array<UserSimulationDetails>|null $value Value to set for the campaignUsers property.
    */
    public function setCampaignUsers(?array $value): void {
        $this->getBackingStore()->set('campaignUsers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the overview property value. The overview property
     * @param TrainingCampaignReportOverview|null $value Value to set for the overview property.
    */
    public function setOverview(?TrainingCampaignReportOverview $value): void {
        $this->getBackingStore()->set('overview', $value);
    }

}
