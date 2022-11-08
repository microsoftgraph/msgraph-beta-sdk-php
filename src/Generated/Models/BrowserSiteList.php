<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BrowserSiteList extends Entity implements Parsable 
{
    /**
     * @var string|null $description The description of the site list.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name of the site list.
    */
    private ?string $displayName = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The user who last modified the site list.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when the site list was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var IdentitySet|null $publishedBy The user who published the site list.
    */
    private ?IdentitySet $publishedBy = null;
    
    /**
     * @var DateTime|null $publishedDateTime The date and time when the site list was published.
    */
    private ?DateTime $publishedDateTime = null;
    
    /**
     * @var string|null $revision The current revision of the site list.
    */
    private ?string $revision = null;
    
    /**
     * @var array<BrowserSharedCookie>|null $sharedCookies A collection of shared cookies defined for the site list.
    */
    private ?array $sharedCookies = null;
    
    /**
     * @var array<BrowserSite>|null $sites A collection of sites defined for the site list.
    */
    private ?array $sites = null;
    
    /**
     * @var BrowserSiteListStatus|null $status The status property
    */
    private ?BrowserSiteListStatus $status = null;
    
    /**
     * Instantiates a new browserSiteList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.browserSiteList');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSiteList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSiteList {
        return new BrowserSiteList();
    }

    /**
     * Gets the description property value. The description of the site list.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of the site list.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'publishedBy' => fn(ParseNode $n) => $o->setPublishedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getStringValue()),
            'sharedCookies' => fn(ParseNode $n) => $o->setSharedCookies($n->getCollectionOfObjectValues([BrowserSharedCookie::class, 'createFromDiscriminatorValue'])),
            'sites' => fn(ParseNode $n) => $o->setSites($n->getCollectionOfObjectValues([BrowserSite::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BrowserSiteListStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the site list.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the site list was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the publishedBy property value. The user who published the site list.
     * @return IdentitySet|null
    */
    public function getPublishedBy(): ?IdentitySet {
        return $this->publishedBy;
    }

    /**
     * Gets the publishedDateTime property value. The date and time when the site list was published.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        return $this->publishedDateTime;
    }

    /**
     * Gets the revision property value. The current revision of the site list.
     * @return string|null
    */
    public function getRevision(): ?string {
        return $this->revision;
    }

    /**
     * Gets the sharedCookies property value. A collection of shared cookies defined for the site list.
     * @return array<BrowserSharedCookie>|null
    */
    public function getSharedCookies(): ?array {
        return $this->sharedCookies;
    }

    /**
     * Gets the sites property value. A collection of sites defined for the site list.
     * @return array<BrowserSite>|null
    */
    public function getSites(): ?array {
        return $this->sites;
    }

    /**
     * Gets the status property value. The status property
     * @return BrowserSiteListStatus|null
    */
    public function getStatus(): ?BrowserSiteListStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('publishedBy', $this->publishedBy);
        $writer->writeDateTimeValue('publishedDateTime', $this->publishedDateTime);
        $writer->writeStringValue('revision', $this->revision);
        $writer->writeCollectionOfObjectValues('sharedCookies', $this->sharedCookies);
        $writer->writeCollectionOfObjectValues('sites', $this->sites);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the description property value. The description of the site list.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of the site list.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the site list.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the site list was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the publishedBy property value. The user who published the site list.
     *  @param IdentitySet|null $value Value to set for the publishedBy property.
    */
    public function setPublishedBy(?IdentitySet $value ): void {
        $this->publishedBy = $value;
    }

    /**
     * Sets the publishedDateTime property value. The date and time when the site list was published.
     *  @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value ): void {
        $this->publishedDateTime = $value;
    }

    /**
     * Sets the revision property value. The current revision of the site list.
     *  @param string|null $value Value to set for the revision property.
    */
    public function setRevision(?string $value ): void {
        $this->revision = $value;
    }

    /**
     * Sets the sharedCookies property value. A collection of shared cookies defined for the site list.
     *  @param array<BrowserSharedCookie>|null $value Value to set for the sharedCookies property.
    */
    public function setSharedCookies(?array $value ): void {
        $this->sharedCookies = $value;
    }

    /**
     * Sets the sites property value. A collection of sites defined for the site list.
     *  @param array<BrowserSite>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value ): void {
        $this->sites = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param BrowserSiteListStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BrowserSiteListStatus $value ): void {
        $this->status = $value;
    }

}
