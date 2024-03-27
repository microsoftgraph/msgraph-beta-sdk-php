<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class KnownIssue extends Entity implements Parsable 
{
    /**
     * Instantiates a new KnownIssue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KnownIssue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KnownIssue {
        return new KnownIssue();
    }

    /**
     * Gets the description property value. The description of the particular known issue.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'knownIssueHistories' => fn(ParseNode $n) => $o->setKnownIssueHistories($n->getCollectionOfObjectValues([KnownIssueHistoryItem::class, 'createFromDiscriminatorValue'])),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'originatingKnowledgeBaseArticle' => fn(ParseNode $n) => $o->setOriginatingKnowledgeBaseArticle($n->getObjectValue([KnowledgeBaseArticle::class, 'createFromDiscriminatorValue'])),
            'resolvedDateTime' => fn(ParseNode $n) => $o->setResolvedDateTime($n->getDateTimeValue()),
            'resolvingKnowledgeBaseArticle' => fn(ParseNode $n) => $o->setResolvingKnowledgeBaseArticle($n->getObjectValue([KnowledgeBaseArticle::class, 'createFromDiscriminatorValue'])),
            'safeguardHoldIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setSafeguardHoldIds($val);
            },
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(WindowsReleaseHealthStatus::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'webViewUrl' => fn(ParseNode $n) => $o->setWebViewUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the knownIssueHistories property value. The knownIssueHistories property
     * @return array<KnownIssueHistoryItem>|null
    */
    public function getKnownIssueHistories(): ?array {
        $val = $this->getBackingStore()->get('knownIssueHistories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KnownIssueHistoryItem::class);
            /** @var array<KnownIssueHistoryItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'knownIssueHistories'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date and time when the known issue was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the originatingKnowledgeBaseArticle property value. Knowledge base article associated with the release when the known issue was first reported.
     * @return KnowledgeBaseArticle|null
    */
    public function getOriginatingKnowledgeBaseArticle(): ?KnowledgeBaseArticle {
        $val = $this->getBackingStore()->get('originatingKnowledgeBaseArticle');
        if (is_null($val) || $val instanceof KnowledgeBaseArticle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originatingKnowledgeBaseArticle'");
    }

    /**
     * Gets the resolvedDateTime property value. The date and time when the known issue was resolved or mitigated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getResolvedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('resolvedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvedDateTime'");
    }

    /**
     * Gets the resolvingKnowledgeBaseArticle property value. Knowledge base article associated with the release when the known issue was resolved or mitigated.
     * @return KnowledgeBaseArticle|null
    */
    public function getResolvingKnowledgeBaseArticle(): ?KnowledgeBaseArticle {
        $val = $this->getBackingStore()->get('resolvingKnowledgeBaseArticle');
        if (is_null($val) || $val instanceof KnowledgeBaseArticle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvingKnowledgeBaseArticle'");
    }

    /**
     * Gets the safeguardHoldIds property value. The safeguardHoldIds property
     * @return array<int>|null
    */
    public function getSafeguardHoldIds(): ?array {
        $val = $this->getBackingStore()->get('safeguardHoldIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'int');
            /** @var array<int>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safeguardHoldIds'");
    }

    /**
     * Gets the startDateTime property value. The date and time when the known issue was first reported. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return WindowsReleaseHealthStatus|null
    */
    public function getStatus(): ?WindowsReleaseHealthStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof WindowsReleaseHealthStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the title property value. The title of the known issue.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the webViewUrl property value. The URL to the known issue in the Windows Release Health dashboard on Microsoft 365 admin center.
     * @return string|null
    */
    public function getWebViewUrl(): ?string {
        $val = $this->getBackingStore()->get('webViewUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webViewUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('knownIssueHistories', $this->getKnownIssueHistories());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeObjectValue('originatingKnowledgeBaseArticle', $this->getOriginatingKnowledgeBaseArticle());
        $writer->writeDateTimeValue('resolvedDateTime', $this->getResolvedDateTime());
        $writer->writeObjectValue('resolvingKnowledgeBaseArticle', $this->getResolvingKnowledgeBaseArticle());
        $writer->writeCollectionOfPrimitiveValues('safeguardHoldIds', $this->getSafeguardHoldIds());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('webViewUrl', $this->getWebViewUrl());
    }

    /**
     * Sets the description property value. The description of the particular known issue.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the knownIssueHistories property value. The knownIssueHistories property
     * @param array<KnownIssueHistoryItem>|null $value Value to set for the knownIssueHistories property.
    */
    public function setKnownIssueHistories(?array $value): void {
        $this->getBackingStore()->set('knownIssueHistories', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date and time when the known issue was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the originatingKnowledgeBaseArticle property value. Knowledge base article associated with the release when the known issue was first reported.
     * @param KnowledgeBaseArticle|null $value Value to set for the originatingKnowledgeBaseArticle property.
    */
    public function setOriginatingKnowledgeBaseArticle(?KnowledgeBaseArticle $value): void {
        $this->getBackingStore()->set('originatingKnowledgeBaseArticle', $value);
    }

    /**
     * Sets the resolvedDateTime property value. The date and time when the known issue was resolved or mitigated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the resolvedDateTime property.
    */
    public function setResolvedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('resolvedDateTime', $value);
    }

    /**
     * Sets the resolvingKnowledgeBaseArticle property value. Knowledge base article associated with the release when the known issue was resolved or mitigated.
     * @param KnowledgeBaseArticle|null $value Value to set for the resolvingKnowledgeBaseArticle property.
    */
    public function setResolvingKnowledgeBaseArticle(?KnowledgeBaseArticle $value): void {
        $this->getBackingStore()->set('resolvingKnowledgeBaseArticle', $value);
    }

    /**
     * Sets the safeguardHoldIds property value. The safeguardHoldIds property
     * @param array<int>|null $value Value to set for the safeguardHoldIds property.
    */
    public function setSafeguardHoldIds(?array $value): void {
        $this->getBackingStore()->set('safeguardHoldIds', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time when the known issue was first reported. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param WindowsReleaseHealthStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WindowsReleaseHealthStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the title property value. The title of the known issue.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the webViewUrl property value. The URL to the known issue in the Windows Release Health dashboard on Microsoft 365 admin center.
     * @param string|null $value Value to set for the webViewUrl property.
    */
    public function setWebViewUrl(?string $value): void {
        $this->getBackingStore()->set('webViewUrl', $value);
    }

}
