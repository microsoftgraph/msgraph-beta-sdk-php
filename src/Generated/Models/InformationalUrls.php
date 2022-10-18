<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationalUrls implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appSignUpUrl The appSignUpUrl property
    */
    private ?string $appSignUpUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $singleSignOnDocumentationUrl The singleSignOnDocumentationUrl property
    */
    private ?string $singleSignOnDocumentationUrl = null;
    
    /**
     * Instantiates a new informationalUrls and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.informationalUrls');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationalUrls
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationalUrls {
        return new InformationalUrls();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appSignUpUrl property value. The appSignUpUrl property
     * @return string|null
    */
    public function getAppSignUpUrl(): ?string {
        return $this->appSignUpUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appSignUpUrl' => fn(ParseNode $n) => $o->setAppSignUpUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'singleSignOnDocumentationUrl' => fn(ParseNode $n) => $o->setSingleSignOnDocumentationUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the singleSignOnDocumentationUrl property value. The singleSignOnDocumentationUrl property
     * @return string|null
    */
    public function getSingleSignOnDocumentationUrl(): ?string {
        return $this->singleSignOnDocumentationUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appSignUpUrl', $this->appSignUpUrl);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('singleSignOnDocumentationUrl', $this->singleSignOnDocumentationUrl);
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
     * Sets the appSignUpUrl property value. The appSignUpUrl property
     *  @param string|null $value Value to set for the appSignUpUrl property.
    */
    public function setAppSignUpUrl(?string $value ): void {
        $this->appSignUpUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the singleSignOnDocumentationUrl property value. The singleSignOnDocumentationUrl property
     *  @param string|null $value Value to set for the singleSignOnDocumentationUrl property.
    */
    public function setSingleSignOnDocumentationUrl(?string $value ): void {
        $this->singleSignOnDocumentationUrl = $value;
    }

}
