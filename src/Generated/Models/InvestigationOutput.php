<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * A read-only stored-file output owned and contained by an investigation session. Inherited id is the existing stable opaque stored-file identifier, unique within its session. Metadata and content reads enforce the same parent-session authorization.
*/
class InvestigationOutput extends Entity implements Parsable 
{
    /**
     * Instantiates a new InvestigationOutput and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvestigationOutput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvestigationOutput {
        return new InvestigationOutput();
    }

    /**
     * Gets the content property value. The output bytes, retrieved through /security/agenticSecurity/sessions/{session-id}/outputs/{output-id}/content. The stream isn't inline in the metadata response. Read-only.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'kind' => fn(ParseNode $n) => $o->setKind($n->getEnumValue(InvestigationOutputType::class)),
        ]);
    }

    /**
     * Gets the kind property value. Output category: summary text or an artifact, both retrieved through the authenticated content stream.
     * @return InvestigationOutputType|null
    */
    public function getKind(): ?InvestigationOutputType {
        $val = $this->getBackingStore()->get('kind');
        if (is_null($val) || $val instanceof InvestigationOutputType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kind'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('kind', $this->getKind());
    }

    /**
     * Sets the content property value. The output bytes, retrieved through /security/agenticSecurity/sessions/{session-id}/outputs/{output-id}/content. The stream isn't inline in the metadata response. Read-only.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the kind property value. Output category: summary text or an artifact, both retrieved through the authenticated content stream.
     * @param InvestigationOutputType|null $value Value to set for the kind property.
    */
    public function setKind(?InvestigationOutputType $value): void {
        $this->getBackingStore()->set('kind', $value);
    }

}
