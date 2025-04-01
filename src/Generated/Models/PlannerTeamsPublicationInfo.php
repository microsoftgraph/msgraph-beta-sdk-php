<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTeamsPublicationInfo extends PlannerTaskCreation implements Parsable 
{
    /**
     * Instantiates a new PlannerTeamsPublicationInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publicationId' => fn(ParseNode $n) => $o->setPublicationId($n->getStringValue()),
            'publicationName' => fn(ParseNode $n) => $o->setPublicationName($n->getStringValue()),
            'publishedToPlanId' => fn(ParseNode $n) => $o->setPublishedToPlanId($n->getStringValue()),
            'publishingTeamId' => fn(ParseNode $n) => $o->setPublishingTeamId($n->getStringValue()),
            'publishingTeamName' => fn(ParseNode $n) => $o->setPublishingTeamName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when this task was last modified by the publication process. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Gets the publicationId property value. The identifier of the publication. Read-only.
     * @return string|null
    */
    public function getPublicationId(): ?string {
        $val = $this->getBackingStore()->get('publicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publicationId'");
    }

    /**
     * Gets the publicationName property value. The name of the published task list. Read-only.
     * @return string|null
    */
    public function getPublicationName(): ?string {
        $val = $this->getBackingStore()->get('publicationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publicationName'");
    }

    /**
     * Gets the publishedToPlanId property value. The identifier of the plannerPlan this task was originally placed in. Read-only.
     * @return string|null
    */
    public function getPublishedToPlanId(): ?string {
        $val = $this->getBackingStore()->get('publishedToPlanId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedToPlanId'");
    }

    /**
     * Gets the publishingTeamId property value. The identifier of the team that initiated the publication process. Read-only.
     * @return string|null
    */
    public function getPublishingTeamId(): ?string {
        $val = $this->getBackingStore()->get('publishingTeamId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishingTeamId'");
    }

    /**
     * Gets the publishingTeamName property value. The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
     * @return string|null
    */
    public function getPublishingTeamName(): ?string {
        $val = $this->getBackingStore()->get('publishingTeamName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishingTeamName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('publicationId', $this->getPublicationId());
        $writer->writeStringValue('publicationName', $this->getPublicationName());
        $writer->writeStringValue('publishedToPlanId', $this->getPublishedToPlanId());
        $writer->writeStringValue('publishingTeamId', $this->getPublishingTeamId());
        $writer->writeStringValue('publishingTeamName', $this->getPublishingTeamName());
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when this task was last modified by the publication process. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the publicationId property value. The identifier of the publication. Read-only.
     * @param string|null $value Value to set for the publicationId property.
    */
    public function setPublicationId(?string $value): void {
        $this->getBackingStore()->set('publicationId', $value);
    }

    /**
     * Sets the publicationName property value. The name of the published task list. Read-only.
     * @param string|null $value Value to set for the publicationName property.
    */
    public function setPublicationName(?string $value): void {
        $this->getBackingStore()->set('publicationName', $value);
    }

    /**
     * Sets the publishedToPlanId property value. The identifier of the plannerPlan this task was originally placed in. Read-only.
     * @param string|null $value Value to set for the publishedToPlanId property.
    */
    public function setPublishedToPlanId(?string $value): void {
        $this->getBackingStore()->set('publishedToPlanId', $value);
    }

    /**
     * Sets the publishingTeamId property value. The identifier of the team that initiated the publication process. Read-only.
     * @param string|null $value Value to set for the publishingTeamId property.
    */
    public function setPublishingTeamId(?string $value): void {
        $this->getBackingStore()->set('publishingTeamId', $value);
    }

    /**
     * Sets the publishingTeamName property value. The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
     * @param string|null $value Value to set for the publishingTeamName property.
    */
    public function setPublishingTeamName(?string $value): void {
        $this->getBackingStore()->set('publishingTeamName', $value);
    }

}
