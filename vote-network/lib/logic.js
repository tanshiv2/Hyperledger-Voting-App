/*
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

//'use strict';
/**
 * Write your transction processor functions here
 */

/**
 * Sample transaction
 * @param {org.example.empty.SampleTransaction} sampleTransaction
 * @transaction
 */
/*async function sampleTransaction(tx) {
    // Save the old value of the asset.
    const oldValue = tx.asset.value;

    // Update the asset with the new value.
    tx.asset.value = tx.newValue;

    // Get the asset registry for the asset.
    const assetRegistry = await getAssetRegistry('org.example.empty.SampleAsset');
    // Update the asset in the asset registry.
    await assetRegistry.update(tx.asset);

    // Emit an event for the modified asset.
    let event = getFactory().newEvent('org.example.empty', 'SampleEvent');
    event.asset = tx.asset;
    event.oldValue = oldValue;
    event.newValue = tx.newValue;
    emit(event);
}

*/

/**
 * @param {org.example.empty.VoteLog} tx
 * @transaction
 */
async function logAdd(tx) {
    let assetRegistry = await getAssetRegistry('org.example.empty.Vote');
  	var factory = getFactory()
    var asset = factory.newResource('org.example.empty', 'Vote', tx.voteID)
    asset.candidate = tx.candidate
    await assetRegistry.add(asset);
}

// async function logAdd(tx) {
//     if (!tx.ifVotedAsset.votedOrNot) {
//     let assetRegistry = await getAssetRegistry('org.example.empty.Vote');
//     var factory = getFactory()
//     var asset = factory.newResource('org.example.empty', 'Vote', tx.voteID)
//     asset.candidate = tx.candidate
//     await assetRegistry.add(asset);
//     let assetRegistry2 = await getAssetRegistry('org.example.empty.ifVoted');
//     var factory2 = getFactory()
//     var asset2 = factory2.newResource('org.example.empty', 'ifVoted', tx.voteID)
//     asset2.votedOrNot = true
//     assetRegistry2.update(tx.ifVotedAsset);
//     }
// }



// function vote(tx) {
//     if (!tx.ifVotedAsset.votedOrNot) {
//         tx.candidateVoteAsset.totalVote = tx.candidateVoteAsset.totalVote + 1;
//         return getAssetRegistry('org.acme.voting.candidateVote')
//             .then(function (assetRegistry) {
//                 return assetRegistry.update(tx.candidateVoteAsset);
//             })
//             .then(function () {
//                 return getAssetRegistry('org.acme.voting.ifVoted')
//                     .then(function (assetRegistry) {
//                         tx.ifVotedAsset.votedOrNot = true;
//                         return assetRegistry.update(tx.ifVotedAsset);
//                     })
//             });
//     }
// }
