<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdgeSearchEngineCustom extends EdgeSearchEngineBase implements Parsable 
{
    /**
     * @var string|null $edgeSearchEngineOpenSearchXmlUrl Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
    */
    private ?string $edgeSearchEngineOpenSearchXmlUrl = null;
    
    /**
     * Instantiates a new EdgeSearchEngineCustom and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.edgeSearchEngineCustom');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeSearchEngineCustom
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeSearchEngineCustom {
        return new EdgeSearchEngineCustom();
    }

    /**
     * Gets the edgeSearchEngineOpenSearchXmlUrl property value. Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
     * @return string|null
    */
    public function getEdgeSearchEngineOpenSearchXmlUrl(): ?string {
        return $this->edgeSearchEngineOpenSearchXmlUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'edgeSearchEngineOpenSearchXmlUrl' => function (ParseNode $n) use ($o) { $o->setEdgeSearchEngineOpenSearchXmlUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('edgeSearchEngineOpenSearchXmlUrl', $this->edgeSearchEngineOpenSearchXmlUrl);
    }

    /**
     * Sets the edgeSearchEngineOpenSearchXmlUrl property value. Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
     *  @param string|null $value Value to set for the edgeSearchEngineOpenSearchXmlUrl property.
    */
    public function setEdgeSearchEngineOpenSearchXmlUrl(?string $value ): void {
        $this->edgeSearchEngineOpenSearchXmlUrl = $value;
    }

}
