<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class ContentSharingSession extends Entity implements Parsable 
{
    /**
     * Instantiates a new ContentSharingSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentSharingSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentSharingSession {
        return new ContentSharingSession();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'pngOfCurrentSlide' => fn(ParseNode $n) => $o->setPngOfCurrentSlide($n->getBinaryContent()),
            'presenterParticipantId' => fn(ParseNode $n) => $o->setPresenterParticipantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the pngOfCurrentSlide property value. The pngOfCurrentSlide property
     * @return StreamInterface|null
    */
    public function getPngOfCurrentSlide(): ?StreamInterface {
        $val = $this->getBackingStore()->get('pngOfCurrentSlide');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pngOfCurrentSlide'");
    }

    /**
     * Gets the presenterParticipantId property value. The presenterParticipantId property
     * @return string|null
    */
    public function getPresenterParticipantId(): ?string {
        $val = $this->getBackingStore()->get('presenterParticipantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presenterParticipantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('pngOfCurrentSlide', $this->getPngOfCurrentSlide());
        $writer->writeStringValue('presenterParticipantId', $this->getPresenterParticipantId());
    }

    /**
     * Sets the pngOfCurrentSlide property value. The pngOfCurrentSlide property
     * @param StreamInterface|null $value Value to set for the pngOfCurrentSlide property.
    */
    public function setPngOfCurrentSlide(?StreamInterface $value): void {
        $this->getBackingStore()->set('pngOfCurrentSlide', $value);
    }

    /**
     * Sets the presenterParticipantId property value. The presenterParticipantId property
     * @param string|null $value Value to set for the presenterParticipantId property.
    */
    public function setPresenterParticipantId(?string $value): void {
        $this->getBackingStore()->set('presenterParticipantId', $value);
    }

}
