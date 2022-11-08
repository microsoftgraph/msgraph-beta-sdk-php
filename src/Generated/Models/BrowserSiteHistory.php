<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BrowserSiteHistory implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowRedirect Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
    */
    private ?bool $allowRedirect = null;
    
    /**
     * @var string|null $comment The comment for the site.
    */
    private ?string $comment = null;
    
    /**
     * @var BrowserSiteCompatibilityMode|null $compatibilityMode Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue.
    */
    private ?BrowserSiteCompatibilityMode $compatibilityMode = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The user who last modified the site.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var BrowserSiteMergeType|null $mergeType The merge type of the site. The possible values are: noMerge, default, unknownFutureValue.
    */
    private ?BrowserSiteMergeType $mergeType = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $publishedDateTime The date and time when the site was last published.
    */
    private ?DateTime $publishedDateTime = null;
    
    /**
     * @var BrowserSiteTargetEnvironment|null $targetEnvironment The target environment that the site should open in. The possible values are: internetExplorerMode, internetExplorer11, microsoftEdge, configurable, none, unknownFutureValue.Prior to June 15, 2022, the internetExplorer11 option would allow opening a site in the Internet Explorer 11 (IE11) desktop application. Following the retirement of IE11 on June 15, 2022, the internetExplorer11 option will no longer open an IE11 window and will instead behave the same as the internetExplorerMode option.
    */
    private ?BrowserSiteTargetEnvironment $targetEnvironment = null;
    
    /**
     * Instantiates a new browserSiteHistory and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.browserSiteHistory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSiteHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSiteHistory {
        return new BrowserSiteHistory();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
     * Gets the compatibilityMode property value. Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue.
     * @return BrowserSiteCompatibilityMode|null
    */
    public function getCompatibilityMode(): ?BrowserSiteCompatibilityMode {
        return $this->compatibilityMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowRedirect' => fn(ParseNode $n) => $o->setAllowRedirect($n->getBooleanValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'compatibilityMode' => fn(ParseNode $n) => $o->setCompatibilityMode($n->getEnumValue(BrowserSiteCompatibilityMode::class)),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'mergeType' => fn(ParseNode $n) => $o->setMergeType($n->getEnumValue(BrowserSiteMergeType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'targetEnvironment' => fn(ParseNode $n) => $o->setTargetEnvironment($n->getEnumValue(BrowserSiteTargetEnvironment::class)),
        ];
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the site.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the mergeType property value. The merge type of the site. The possible values are: noMerge, default, unknownFutureValue.
     * @return BrowserSiteMergeType|null
    */
    public function getMergeType(): ?BrowserSiteMergeType {
        return $this->mergeType;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the publishedDateTime property value. The date and time when the site was last published.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        return $this->publishedDateTime;
    }

    /**
     * Gets the targetEnvironment property value. The target environment that the site should open in. The possible values are: internetExplorerMode, internetExplorer11, microsoftEdge, configurable, none, unknownFutureValue.Prior to June 15, 2022, the internetExplorer11 option would allow opening a site in the Internet Explorer 11 (IE11) desktop application. Following the retirement of IE11 on June 15, 2022, the internetExplorer11 option will no longer open an IE11 window and will instead behave the same as the internetExplorerMode option.
     * @return BrowserSiteTargetEnvironment|null
    */
    public function getTargetEnvironment(): ?BrowserSiteTargetEnvironment {
        return $this->targetEnvironment;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowRedirect', $this->allowRedirect);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeEnumValue('compatibilityMode', $this->compatibilityMode);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeEnumValue('mergeType', $this->mergeType);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('publishedDateTime', $this->publishedDateTime);
        $writer->writeEnumValue('targetEnvironment', $this->targetEnvironment);
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
     * Sets the compatibilityMode property value. Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue.
     *  @param BrowserSiteCompatibilityMode|null $value Value to set for the compatibilityMode property.
    */
    public function setCompatibilityMode(?BrowserSiteCompatibilityMode $value ): void {
        $this->compatibilityMode = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the site.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the mergeType property value. The merge type of the site. The possible values are: noMerge, default, unknownFutureValue.
     *  @param BrowserSiteMergeType|null $value Value to set for the mergeType property.
    */
    public function setMergeType(?BrowserSiteMergeType $value ): void {
        $this->mergeType = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the publishedDateTime property value. The date and time when the site was last published.
     *  @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value ): void {
        $this->publishedDateTime = $value;
    }

    /**
     * Sets the targetEnvironment property value. The target environment that the site should open in. The possible values are: internetExplorerMode, internetExplorer11, microsoftEdge, configurable, none, unknownFutureValue.Prior to June 15, 2022, the internetExplorer11 option would allow opening a site in the Internet Explorer 11 (IE11) desktop application. Following the retirement of IE11 on June 15, 2022, the internetExplorer11 option will no longer open an IE11 window and will instead behave the same as the internetExplorerMode option.
     *  @param BrowserSiteTargetEnvironment|null $value Value to set for the targetEnvironment property.
    */
    public function setTargetEnvironment(?BrowserSiteTargetEnvironment $value ): void {
        $this->targetEnvironment = $value;
    }

}
