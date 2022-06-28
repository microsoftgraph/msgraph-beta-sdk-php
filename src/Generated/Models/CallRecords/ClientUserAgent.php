<?php

namespace Microsoft\Graph\Beta\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientUserAgent extends UserAgent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ClientPlatform|null $platform Identifies the platform used by this endpoint. Possible values are: unknown, windows, macOS, iOS, android, web, ipPhone, roomSystem, surfaceHub, holoLens, unknownFutureValue.
    */
    private ?ClientPlatform $platform = null;
    
    /**
     * @var ProductFamily|null $productFamily Identifies the family of application software used by this endpoint. Possible values are: unknown, teams, skypeForBusiness, lync, unknownFutureValue, azureCommunicationServices.  Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: azureCommunicationServices.
    */
    private ?ProductFamily $productFamily = null;
    
    /**
     * Instantiates a new ClientUserAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientUserAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientUserAgent {
        return new ClientUserAgent();
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
        return array_merge(parent::getFieldDeserializers(), [
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(ClientPlatform::class)); },
            'productFamily' => function (ParseNode $n) use ($o) { $o->setProductFamily($n->getEnumValue(ProductFamily::class)); },
        ]);
    }

    /**
     * Gets the platform property value. Identifies the platform used by this endpoint. Possible values are: unknown, windows, macOS, iOS, android, web, ipPhone, roomSystem, surfaceHub, holoLens, unknownFutureValue.
     * @return ClientPlatform|null
    */
    public function getPlatform(): ?ClientPlatform {
        return $this->platform;
    }

    /**
     * Gets the productFamily property value. Identifies the family of application software used by this endpoint. Possible values are: unknown, teams, skypeForBusiness, lync, unknownFutureValue, azureCommunicationServices.  Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: azureCommunicationServices.
     * @return ProductFamily|null
    */
    public function getProductFamily(): ?ProductFamily {
        return $this->productFamily;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeEnumValue('productFamily', $this->productFamily);
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
     * Sets the platform property value. Identifies the platform used by this endpoint. Possible values are: unknown, windows, macOS, iOS, android, web, ipPhone, roomSystem, surfaceHub, holoLens, unknownFutureValue.
     *  @param ClientPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?ClientPlatform $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the productFamily property value. Identifies the family of application software used by this endpoint. Possible values are: unknown, teams, skypeForBusiness, lync, unknownFutureValue, azureCommunicationServices.  Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: azureCommunicationServices.
     *  @param ProductFamily|null $value Value to set for the productFamily property.
    */
    public function setProductFamily(?ProductFamily $value ): void {
        $this->productFamily = $value;
    }

}
