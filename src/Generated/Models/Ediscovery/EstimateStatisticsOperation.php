<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EstimateStatisticsOperation extends CaseOperation 
{
    /** @var int|null $indexedItemCount The estimated count of items for the sourceCollection that matched the content query. */
    private ?int $indexedItemCount = null;
    
    /** @var int|null $indexedItemsSize The estimated size of items for the sourceCollection that matched the content query. */
    private ?int $indexedItemsSize = null;
    
    /** @var int|null $mailboxCount The number of mailboxes that had search hits. */
    private ?int $mailboxCount = null;
    
    /** @var int|null $siteCount The number of mailboxes that had search hits. */
    private ?int $siteCount = null;
    
    /** @var SourceCollection|null $sourceCollection eDiscovery collection, commonly known as a search. */
    private ?SourceCollection $sourceCollection = null;
    
    /** @var int|null $unindexedItemCount The estimated count of unindexed items for the collection. */
    private ?int $unindexedItemCount = null;
    
    /** @var int|null $unindexedItemsSize The estimated size of unindexed items for the collection. */
    private ?int $unindexedItemsSize = null;
    
    /**
     * Instantiates a new estimateStatisticsOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EstimateStatisticsOperation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EstimateStatisticsOperation {
        return new EstimateStatisticsOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'indexedItemCount' => function (self $o, ParseNode $n) { $o->setIndexedItemCount($n->getIntegerValue()); },
            'indexedItemsSize' => function (self $o, ParseNode $n) { $o->setIndexedItemsSize($n->getIntegerValue()); },
            'mailboxCount' => function (self $o, ParseNode $n) { $o->setMailboxCount($n->getIntegerValue()); },
            'siteCount' => function (self $o, ParseNode $n) { $o->setSiteCount($n->getIntegerValue()); },
            'sourceCollection' => function (self $o, ParseNode $n) { $o->setSourceCollection($n->getObjectValue(SourceCollection::class)); },
            'unindexedItemCount' => function (self $o, ParseNode $n) { $o->setUnindexedItemCount($n->getIntegerValue()); },
            'unindexedItemsSize' => function (self $o, ParseNode $n) { $o->setUnindexedItemsSize($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the indexedItemCount property value. The estimated count of items for the sourceCollection that matched the content query.
     * @return int|null
    */
    public function getIndexedItemCount(): ?int {
        return $this->indexedItemCount;
    }

    /**
     * Gets the indexedItemsSize property value. The estimated size of items for the sourceCollection that matched the content query.
     * @return int|null
    */
    public function getIndexedItemsSize(): ?int {
        return $this->indexedItemsSize;
    }

    /**
     * Gets the mailboxCount property value. The number of mailboxes that had search hits.
     * @return int|null
    */
    public function getMailboxCount(): ?int {
        return $this->mailboxCount;
    }

    /**
     * Gets the siteCount property value. The number of mailboxes that had search hits.
     * @return int|null
    */
    public function getSiteCount(): ?int {
        return $this->siteCount;
    }

    /**
     * Gets the sourceCollection property value. eDiscovery collection, commonly known as a search.
     * @return SourceCollection|null
    */
    public function getSourceCollection(): ?SourceCollection {
        return $this->sourceCollection;
    }

    /**
     * Gets the unindexedItemCount property value. The estimated count of unindexed items for the collection.
     * @return int|null
    */
    public function getUnindexedItemCount(): ?int {
        return $this->unindexedItemCount;
    }

    /**
     * Gets the unindexedItemsSize property value. The estimated size of unindexed items for the collection.
     * @return int|null
    */
    public function getUnindexedItemsSize(): ?int {
        return $this->unindexedItemsSize;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('indexedItemCount', $this->indexedItemCount);
        $writer->writeIntegerValue('indexedItemsSize', $this->indexedItemsSize);
        $writer->writeIntegerValue('mailboxCount', $this->mailboxCount);
        $writer->writeIntegerValue('siteCount', $this->siteCount);
        $writer->writeObjectValue('sourceCollection', $this->sourceCollection);
        $writer->writeIntegerValue('unindexedItemCount', $this->unindexedItemCount);
        $writer->writeIntegerValue('unindexedItemsSize', $this->unindexedItemsSize);
    }

    /**
     * Sets the indexedItemCount property value. The estimated count of items for the sourceCollection that matched the content query.
     *  @param int|null $value Value to set for the indexedItemCount property.
    */
    public function setIndexedItemCount(?int $value ): void {
        $this->indexedItemCount = $value;
    }

    /**
     * Sets the indexedItemsSize property value. The estimated size of items for the sourceCollection that matched the content query.
     *  @param int|null $value Value to set for the indexedItemsSize property.
    */
    public function setIndexedItemsSize(?int $value ): void {
        $this->indexedItemsSize = $value;
    }

    /**
     * Sets the mailboxCount property value. The number of mailboxes that had search hits.
     *  @param int|null $value Value to set for the mailboxCount property.
    */
    public function setMailboxCount(?int $value ): void {
        $this->mailboxCount = $value;
    }

    /**
     * Sets the siteCount property value. The number of mailboxes that had search hits.
     *  @param int|null $value Value to set for the siteCount property.
    */
    public function setSiteCount(?int $value ): void {
        $this->siteCount = $value;
    }

    /**
     * Sets the sourceCollection property value. eDiscovery collection, commonly known as a search.
     *  @param SourceCollection|null $value Value to set for the sourceCollection property.
    */
    public function setSourceCollection(?SourceCollection $value ): void {
        $this->sourceCollection = $value;
    }

    /**
     * Sets the unindexedItemCount property value. The estimated count of unindexed items for the collection.
     *  @param int|null $value Value to set for the unindexedItemCount property.
    */
    public function setUnindexedItemCount(?int $value ): void {
        $this->unindexedItemCount = $value;
    }

    /**
     * Sets the unindexedItemsSize property value. The estimated size of unindexed items for the collection.
     *  @param int|null $value Value to set for the unindexedItemsSize property.
    */
    public function setUnindexedItemsSize(?int $value ): void {
        $this->unindexedItemsSize = $value;
    }

}
