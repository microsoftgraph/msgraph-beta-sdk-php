<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NetworkLocationDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $networkNames Provides the name of the network used when signing in.
    */
    private ?array $networkNames = null;
    
    /**
     * @var NetworkType|null $networkType Provides the type of network used when signing in. Possible values are: intranet, extranet, namedNetwork, trusted, unknownFutureValue.
    */
    private ?NetworkType $networkType = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new networkLocationDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.networkLocationDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkLocationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkLocationDetail {
        return new NetworkLocationDetail();
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
            'networkNames' => function (ParseNode $n) use ($o) { $o->setNetworkNames($n->getCollectionOfPrimitiveValues()); },
            'networkType' => function (ParseNode $n) use ($o) { $o->setNetworkType($n->getEnumValue(NetworkType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the networkNames property value. Provides the name of the network used when signing in.
     * @return array<string>|null
    */
    public function getNetworkNames(): ?array {
        return $this->networkNames;
    }

    /**
     * Gets the networkType property value. Provides the type of network used when signing in. Possible values are: intranet, extranet, namedNetwork, trusted, unknownFutureValue.
     * @return NetworkType|null
    */
    public function getNetworkType(): ?NetworkType {
        return $this->networkType;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('networkNames', $this->networkNames);
        $writer->writeEnumValue('networkType', $this->networkType);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the networkNames property value. Provides the name of the network used when signing in.
     *  @param array<string>|null $value Value to set for the networkNames property.
    */
    public function setNetworkNames(?array $value ): void {
        $this->networkNames = $value;
    }

    /**
     * Sets the networkType property value. Provides the type of network used when signing in. Possible values are: intranet, extranet, namedNetwork, trusted, unknownFutureValue.
     *  @param NetworkType|null $value Value to set for the networkType property.
    */
    public function setNetworkType(?NetworkType $value ): void {
        $this->networkType = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
