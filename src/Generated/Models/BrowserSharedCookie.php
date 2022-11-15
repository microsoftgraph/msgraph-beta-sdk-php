<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BrowserSharedCookie extends Entity implements Parsable 
{
    /**
     * @var string|null $comment The comment for the shared cookie.
    */
    private ?string $comment = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the shared cookie was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $deletedDateTime The date and time when the shared cookie was deleted.
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * @var string|null $displayName The name of the cookie.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<BrowserSharedCookieHistory>|null $history The history of modifications applied to the cookie.
    */
    private ?array $history = null;
    
    /**
     * @var bool|null $hostOnly Controls whether a cookie is a host-only or domain cookie.
    */
    private ?bool $hostOnly = null;
    
    /**
     * @var string|null $hostOrDomain The URL of the cookie.
    */
    private ?string $hostOrDomain = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The user who last modified the cookie.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when the cookie was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $path The path of the cookie.
    */
    private ?string $path = null;
    
    /**
     * @var BrowserSharedCookieSourceEnvironment|null $sourceEnvironment The sourceEnvironment property
    */
    private ?BrowserSharedCookieSourceEnvironment $sourceEnvironment = null;
    
    /**
     * @var BrowserSharedCookieStatus|null $status The status property
    */
    private ?BrowserSharedCookieStatus $status = null;
    
    /**
     * Instantiates a new browserSharedCookie and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.browserSharedCookie');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSharedCookie
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSharedCookie {
        return new BrowserSharedCookie();
    }

    /**
     * Gets the comment property value. The comment for the shared cookie.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the shared cookie was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deletedDateTime property value. The date and time when the shared cookie was deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * Gets the displayName property value. The name of the cookie.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([BrowserSharedCookieHistory::class, 'createFromDiscriminatorValue'])),
            'hostOnly' => fn(ParseNode $n) => $o->setHostOnly($n->getBooleanValue()),
            'hostOrDomain' => fn(ParseNode $n) => $o->setHostOrDomain($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'sourceEnvironment' => fn(ParseNode $n) => $o->setSourceEnvironment($n->getEnumValue(BrowserSharedCookieSourceEnvironment::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BrowserSharedCookieStatus::class)),
        ]);
    }

    /**
     * Gets the history property value. The history of modifications applied to the cookie.
     * @return array<BrowserSharedCookieHistory>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the hostOnly property value. Controls whether a cookie is a host-only or domain cookie.
     * @return bool|null
    */
    public function getHostOnly(): ?bool {
        return $this->hostOnly;
    }

    /**
     * Gets the hostOrDomain property value. The URL of the cookie.
     * @return string|null
    */
    public function getHostOrDomain(): ?string {
        return $this->hostOrDomain;
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the cookie.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the cookie was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the path property value. The path of the cookie.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the sourceEnvironment property value. The sourceEnvironment property
     * @return BrowserSharedCookieSourceEnvironment|null
    */
    public function getSourceEnvironment(): ?BrowserSharedCookieSourceEnvironment {
        return $this->sourceEnvironment;
    }

    /**
     * Gets the status property value. The status property
     * @return BrowserSharedCookieStatus|null
    */
    public function getStatus(): ?BrowserSharedCookieStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('deletedDateTime', $this->deletedDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('history', $this->history);
        $writer->writeBooleanValue('hostOnly', $this->hostOnly);
        $writer->writeStringValue('hostOrDomain', $this->hostOrDomain);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('path', $this->path);
        $writer->writeEnumValue('sourceEnvironment', $this->sourceEnvironment);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the comment property value. The comment for the shared cookie.
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the shared cookie was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deletedDateTime property value. The date and time when the shared cookie was deleted.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

    /**
     * Sets the displayName property value. The name of the cookie.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the history property value. The history of modifications applied to the cookie.
     *  @param array<BrowserSharedCookieHistory>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value ): void {
        $this->history = $value;
    }

    /**
     * Sets the hostOnly property value. Controls whether a cookie is a host-only or domain cookie.
     *  @param bool|null $value Value to set for the hostOnly property.
    */
    public function setHostOnly(?bool $value ): void {
        $this->hostOnly = $value;
    }

    /**
     * Sets the hostOrDomain property value. The URL of the cookie.
     *  @param string|null $value Value to set for the hostOrDomain property.
    */
    public function setHostOrDomain(?string $value ): void {
        $this->hostOrDomain = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the cookie.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the cookie was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the path property value. The path of the cookie.
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

    /**
     * Sets the sourceEnvironment property value. The sourceEnvironment property
     *  @param BrowserSharedCookieSourceEnvironment|null $value Value to set for the sourceEnvironment property.
    */
    public function setSourceEnvironment(?BrowserSharedCookieSourceEnvironment $value ): void {
        $this->sourceEnvironment = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param BrowserSharedCookieStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BrowserSharedCookieStatus $value ): void {
        $this->status = $value;
    }

}
