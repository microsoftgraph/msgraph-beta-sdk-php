<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NetworkLocationDetail implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $networkNames Provides the name of the network used when signing in. */
    private ?array $networkNames = null;
    
    /** @var NetworkType|null $networkType Provides the type of network used when signing in. Possible values are: intranet, extranet, namedNetwork, trusted, unknownFutureValue. */
    private ?NetworkType $networkType = null;
    
    /**
     * Instantiates a new networkLocationDetail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkLocationDetail
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): NetworkLocationDetail {
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
        return  [
            'networkNames' => function (self $o, ParseNode $n) { $o->setNetworkNames($n->getCollectionOfPrimitiveValues()); },
            'networkType' => function (self $o, ParseNode $n) { $o->setNetworkType($n->getEnumValue(NetworkType::class)); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('networkNames', $this->networkNames);
        $writer->writeEnumValue('networkType', $this->networkType);
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

}
