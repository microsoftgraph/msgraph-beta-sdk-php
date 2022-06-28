<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdgeSearchEngine extends EdgeSearchEngineBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EdgeSearchEngineType|null $edgeSearchEngineType Allows IT admins to set a predefined default search engine for MDM-Controlled devices. Possible values are: default, bing.
    */
    private ?EdgeSearchEngineType $edgeSearchEngineType = null;
    
    /**
     * Instantiates a new EdgeSearchEngine and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeSearchEngine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeSearchEngine {
        return new EdgeSearchEngine();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the edgeSearchEngineType property value. Allows IT admins to set a predefined default search engine for MDM-Controlled devices. Possible values are: default, bing.
     * @return EdgeSearchEngineType|null
    */
    public function getEdgeSearchEngineType(): ?EdgeSearchEngineType {
        return $this->edgeSearchEngineType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'edgeSearchEngineType' => function (ParseNode $n) use ($o) { $o->setEdgeSearchEngineType($n->getEnumValue(EdgeSearchEngineType::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('edgeSearchEngineType', $this->edgeSearchEngineType);
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
     * Sets the edgeSearchEngineType property value. Allows IT admins to set a predefined default search engine for MDM-Controlled devices. Possible values are: default, bing.
     *  @param EdgeSearchEngineType|null $value Value to set for the edgeSearchEngineType property.
    */
    public function setEdgeSearchEngineType(?EdgeSearchEngineType $value ): void {
        $this->edgeSearchEngineType = $value;
    }

}
