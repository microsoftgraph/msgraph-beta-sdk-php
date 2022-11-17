<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BrowserSite extends Entity implements Parsable 
{
    /**
     * @var bool|null $allowRedirect Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
    */
    private ?bool $allowRedirect = null;
    
    /**
     * @var string|null $comment The comment for the site.
    */
    private ?string $comment = null;
    
    /**
     * @var BrowserSiteCompatibilityMode|null $compatibilityMode The compatibilityMode property
    */
    private ?BrowserSiteCompatibilityMode $compatibilityMode = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the site was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $deletedDateTime The date and time when the site was deleted.
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * @var array<BrowserSiteHistory>|null $history The history of modifications applied to the site.
    */
    private ?array $history = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The user who last modified the site.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when the site was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var BrowserSiteMergeType|null $mergeType The mergeType property
    */
    private ?BrowserSiteMergeType $mergeType = null;
    
    /**
     * @var BrowserSiteStatus|null $status The status property
    */
    private ?BrowserSiteStatus $status = null;
    
    /**
     * @var BrowserSiteTargetEnvironment|null $targetEnvironment The targetEnvironment property
    */
    private ?BrowserSiteTargetEnvironment $targetEnvironment = null;
    
    /**
     * @var string|null $webUrl The URL of the site.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new browserSite and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.browserSite');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSite {
        return new BrowserSite();
    }

    /**
     * Gets the allowRedirect property value. Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
     * @return bool|null
    */
    public function getAllowRedirect(): ?bool {
        return $this->allowRedirect;
    }

    /**
     * Gets the comment property value. The comment for the site.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the compatibilityMode property value. The compatibilityMode property
     * @return BrowserSiteCompatibilityMode|null
    */
    public function getCompatibilityMode(): ?BrowserSiteCompatibilityMode {
        return $this->compatibilityMode;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the site was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deletedDateTime property value. The date and time when the site was deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowRedirect' => fn(ParseNode $n) => $o->setAllowRedirect($n->getBooleanValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'compatibilityMode' => fn(ParseNode $n) => $o->setCompatibilityMode($n->getEnumValue(BrowserSiteCompatibilityMode::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([BrowserSiteHistory::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'mergeType' => fn(ParseNode $n) => $o->setMergeType($n->getEnumValue(BrowserSiteMergeType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BrowserSiteStatus::class)),
            'targetEnvironment' => fn(ParseNode $n) => $o->setTargetEnvironment($n->getEnumValue(BrowserSiteTargetEnvironment::class)),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the history property value. The history of modifications applied to the site.
     * @return array<BrowserSiteHistory>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the site.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the site was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the mergeType property value. The mergeType property
     * @return BrowserSiteMergeType|null
    */
    public function getMergeType(): ?BrowserSiteMergeType {
        return $this->mergeType;
    }

    /**
     * Gets the status property value. The status property
     * @return BrowserSiteStatus|null
    */
    public function getStatus(): ?BrowserSiteStatus {
        return $this->status;
    }

    /**
     * Gets the targetEnvironment property value. The targetEnvironment property
     * @return BrowserSiteTargetEnvironment|null
    */
    public function getTargetEnvironment(): ?BrowserSiteTargetEnvironment {
        return $this->targetEnvironment;
    }

    /**
     * Gets the webUrl property value. The URL of the site.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowRedirect', $this->allowRedirect);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeEnumValue('compatibilityMode', $this->compatibilityMode);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('deletedDateTime', $this->deletedDateTime);
        $writer->writeCollectionOfObjectValues('history', $this->history);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('mergeType', $this->mergeType);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeEnumValue('targetEnvironment', $this->targetEnvironment);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the allowRedirect property value. Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
     *  @param bool|null $value Value to set for the allowRedirect property.
    */
    public function setAllowRedirect(?bool $value ): void {
        $this->allowRedirect = $value;
    }

    /**
     * Sets the comment property value. The comment for the site.
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the compatibilityMode property value. The compatibilityMode property
     *  @param BrowserSiteCompatibilityMode|null $value Value to set for the compatibilityMode property.
    */
    public function setCompatibilityMode(?BrowserSiteCompatibilityMode $value ): void {
        $this->compatibilityMode = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the site was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deletedDateTime property value. The date and time when the site was deleted.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

    /**
     * Sets the history property value. The history of modifications applied to the site.
     *  @param array<BrowserSiteHistory>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value ): void {
        $this->history = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the site.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the site was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the mergeType property value. The mergeType property
     *  @param BrowserSiteMergeType|null $value Value to set for the mergeType property.
    */
    public function setMergeType(?BrowserSiteMergeType $value ): void {
        $this->mergeType = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param BrowserSiteStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BrowserSiteStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the targetEnvironment property value. The targetEnvironment property
     *  @param BrowserSiteTargetEnvironment|null $value Value to set for the targetEnvironment property.
    */
    public function setTargetEnvironment(?BrowserSiteTargetEnvironment $value ): void {
        $this->targetEnvironment = $value;
    }

    /**
     * Sets the webUrl property value. The URL of the site.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
