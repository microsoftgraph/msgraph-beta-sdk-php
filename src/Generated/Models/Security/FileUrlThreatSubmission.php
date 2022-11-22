<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileUrlThreatSubmission extends FileThreatSubmission implements Parsable 
{
    /**
     * Instantiates a new FileUrlThreatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.fileUrlThreatSubmission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileUrlThreatSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileUrlThreatSubmission {
        return new FileUrlThreatSubmission();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileUrl' => fn(ParseNode $n) => $o->setFileUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileUrl property value. It specifies the URL of the file which needs to be submitted.
     * @return string|null
    */
    public function getFileUrl(): ?string {
        return $this->getBackingStore()->get('fileUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileUrl', $this->getFileUrl());
    }

    /**
     * Sets the fileUrl property value. It specifies the URL of the file which needs to be submitted.
     *  @param string|null $value Value to set for the fileUrl property.
    */
    public function setFileUrl(?string $value): void {
        $this->getBackingStore()->set('fileUrl', $value);
    }

}
