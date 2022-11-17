<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlannerTeamsPublicationInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new plannerTeamsPublicationInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.plannerTeamsPublicationInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTeamsPublicationInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTeamsPublicationInfo {
        return new PlannerTeamsPublicationInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publicationId' => fn(ParseNode $n) => $o->setPublicationId($n->getStringValue()),
            'publishedToPlanId' => fn(ParseNode $n) => $o->setPublishedToPlanId($n->getStringValue()),
            'publishingTeamId' => fn(ParseNode $n) => $o->setPublishingTeamId($n->getStringValue()),
            'publishingTeamName' => fn(ParseNode $n) => $o->setPublishingTeamName($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when this task was last modified by the publication process. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the publicationId property value. The identifier of the publication. Read-only.
     * @return string|null
    */
    public function getPublicationId(): ?string {
        return $this->getBackingStore()->get('publicationId');
    }

    /**
     * Gets the publishedToPlanId property value. The identifier of the plannerPlan this task was originally placed in. Read-only.
     * @return string|null
    */
    public function getPublishedToPlanId(): ?string {
        return $this->getBackingStore()->get('publishedToPlanId');
    }

    /**
     * Gets the publishingTeamId property value. The identifier of the team that initiated the publication process. Read-only.
     * @return string|null
    */
    public function getPublishingTeamId(): ?string {
        return $this->getBackingStore()->get('publishingTeamId');
    }

    /**
     * Gets the publishingTeamName property value. The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
     * @return string|null
    */
    public function getPublishingTeamName(): ?string {
        return $this->getBackingStore()->get('publishingTeamName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('publicationId', $this->getPublicationId());
        $writer->writeStringValue('publishedToPlanId', $this->getPublishedToPlanId());
        $writer->writeStringValue('publishingTeamId', $this->getPublishingTeamId());
        $writer->writeStringValue('publishingTeamName', $this->getPublishingTeamName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when this task was last modified by the publication process. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the publicationId property value. The identifier of the publication. Read-only.
     *  @param string|null $value Value to set for the publicationId property.
    */
    public function setPublicationId(?string $value): void {
        $this->getBackingStore()->set('publicationId', $value);
    }

    /**
     * Sets the publishedToPlanId property value. The identifier of the plannerPlan this task was originally placed in. Read-only.
     *  @param string|null $value Value to set for the publishedToPlanId property.
    */
    public function setPublishedToPlanId(?string $value): void {
        $this->getBackingStore()->set('publishedToPlanId', $value);
    }

    /**
     * Sets the publishingTeamId property value. The identifier of the team that initiated the publication process. Read-only.
     *  @param string|null $value Value to set for the publishingTeamId property.
    */
    public function setPublishingTeamId(?string $value): void {
        $this->getBackingStore()->set('publishingTeamId', $value);
    }

    /**
     * Sets the publishingTeamName property value. The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
     *  @param string|null $value Value to set for the publishingTeamName property.
    */
    public function setPublishingTeamName(?string $value): void {
        $this->getBackingStore()->set('publishingTeamName', $value);
    }

}
