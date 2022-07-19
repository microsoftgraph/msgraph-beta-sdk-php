<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTeamsPublicationInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when this task was last modified by the publication process. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $publicationId The identifier of the publication. Read-only.
    */
    private ?string $publicationId = null;
    
    /**
     * @var string|null $publishedToPlanId The identifier of the plannerPlan this task was originally placed in. Read-only.
    */
    private ?string $publishedToPlanId = null;
    
    /**
     * @var string|null $publishingTeamId The identifier of the team that initiated the publication process. Read-only.
    */
    private ?string $publishingTeamId = null;
    
    /**
     * @var string|null $publishingTeamName The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
    */
    private ?string $publishingTeamName = null;
    
    /**
     * Instantiates a new plannerTeamsPublicationInfo and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'publicationId' => function (ParseNode $n) use ($o) { $o->setPublicationId($n->getStringValue()); },
            'publishedToPlanId' => function (ParseNode $n) use ($o) { $o->setPublishedToPlanId($n->getStringValue()); },
            'publishingTeamId' => function (ParseNode $n) use ($o) { $o->setPublishingTeamId($n->getStringValue()); },
            'publishingTeamName' => function (ParseNode $n) use ($o) { $o->setPublishingTeamName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when this task was last modified by the publication process. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the publicationId property value. The identifier of the publication. Read-only.
     * @return string|null
    */
    public function getPublicationId(): ?string {
        return $this->publicationId;
    }

    /**
     * Gets the publishedToPlanId property value. The identifier of the plannerPlan this task was originally placed in. Read-only.
     * @return string|null
    */
    public function getPublishedToPlanId(): ?string {
        return $this->publishedToPlanId;
    }

    /**
     * Gets the publishingTeamId property value. The identifier of the team that initiated the publication process. Read-only.
     * @return string|null
    */
    public function getPublishingTeamId(): ?string {
        return $this->publishingTeamId;
    }

    /**
     * Gets the publishingTeamName property value. The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
     * @return string|null
    */
    public function getPublishingTeamName(): ?string {
        return $this->publishingTeamName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('publicationId', $this->publicationId);
        $writer->writeStringValue('publishedToPlanId', $this->publishedToPlanId);
        $writer->writeStringValue('publishingTeamId', $this->publishingTeamId);
        $writer->writeStringValue('publishingTeamName', $this->publishingTeamName);
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
     * Sets the lastModifiedDateTime property value. The date and time when this task was last modified by the publication process. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the publicationId property value. The identifier of the publication. Read-only.
     *  @param string|null $value Value to set for the publicationId property.
    */
    public function setPublicationId(?string $value ): void {
        $this->publicationId = $value;
    }

    /**
     * Sets the publishedToPlanId property value. The identifier of the plannerPlan this task was originally placed in. Read-only.
     *  @param string|null $value Value to set for the publishedToPlanId property.
    */
    public function setPublishedToPlanId(?string $value ): void {
        $this->publishedToPlanId = $value;
    }

    /**
     * Sets the publishingTeamId property value. The identifier of the team that initiated the publication process. Read-only.
     *  @param string|null $value Value to set for the publishingTeamId property.
    */
    public function setPublishingTeamId(?string $value ): void {
        $this->publishingTeamId = $value;
    }

    /**
     * Sets the publishingTeamName property value. The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
     *  @param string|null $value Value to set for the publishingTeamName property.
    */
    public function setPublishingTeamName(?string $value ): void {
        $this->publishingTeamName = $value;
    }

}
