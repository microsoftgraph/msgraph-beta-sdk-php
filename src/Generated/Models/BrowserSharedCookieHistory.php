<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BrowserSharedCookieHistory implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $comment The comment for the shared cookie.
    */
    private ?string $comment = null;
    
    /**
     * @var string|null $displayName The name of the cookie.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $hostOnly Controls whether a cookie is a host-only or domain cookie.
    */
    private ?bool $hostOnly = null;
    
    /**
     * @var string|null $hostOrDomain The URL of the cookie.
    */
    private ?string $hostOrDomain = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The lastModifiedBy property
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $path The path of the cookie.
    */
    private ?string $path = null;
    
    /**
     * @var DateTime|null $publishedDateTime The date and time when the cookie was last published.
    */
    private ?DateTime $publishedDateTime = null;
    
    /**
     * @var BrowserSharedCookieSourceEnvironment|null $sourceEnvironment Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue.
    */
    private ?BrowserSharedCookieSourceEnvironment $sourceEnvironment = null;
    
    /**
     * Instantiates a new browserSharedCookieHistory and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.browserSharedCookieHistory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSharedCookieHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSharedCookieHistory {
        return new BrowserSharedCookieHistory();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comment property value. The comment for the shared cookie.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
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
        return  [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'hostOnly' => fn(ParseNode $n) => $o->setHostOnly($n->getBooleanValue()),
            'hostOrDomain' => fn(ParseNode $n) => $o->setHostOrDomain($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'sourceEnvironment' => fn(ParseNode $n) => $o->setSourceEnvironment($n->getEnumValue(BrowserSharedCookieSourceEnvironment::class)),
        ];
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
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the path property value. The path of the cookie.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the publishedDateTime property value. The date and time when the cookie was last published.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        return $this->publishedDateTime;
    }

    /**
     * Gets the sourceEnvironment property value. Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue.
     * @return BrowserSharedCookieSourceEnvironment|null
    */
    public function getSourceEnvironment(): ?BrowserSharedCookieSourceEnvironment {
        return $this->sourceEnvironment;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('hostOnly', $this->hostOnly);
        $writer->writeStringValue('hostOrDomain', $this->hostOrDomain);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('path', $this->path);
        $writer->writeDateTimeValue('publishedDateTime', $this->publishedDateTime);
        $writer->writeEnumValue('sourceEnvironment', $this->sourceEnvironment);
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
     * Sets the comment property value. The comment for the shared cookie.
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the displayName property value. The name of the cookie.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
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
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the path property value. The path of the cookie.
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

    /**
     * Sets the publishedDateTime property value. The date and time when the cookie was last published.
     *  @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value ): void {
        $this->publishedDateTime = $value;
    }

    /**
     * Sets the sourceEnvironment property value. Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue.
     *  @param BrowserSharedCookieSourceEnvironment|null $value Value to set for the sourceEnvironment property.
    */
    public function setSourceEnvironment(?BrowserSharedCookieSourceEnvironment $value ): void {
        $this->sourceEnvironment = $value;
    }

}
